<?php 

// Get All 
function getAllPost($conn){
   $sql = "SELECT * FROM post 
           WHERE publish=1 ORDER BY post_id DESC";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
   	   $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
   	   return $data;
   }else {
   	 return 0;
   }
}
 // getAllDeep admin
function getAllDeep($conn){
   $sql = "SELECT * FROM post";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $data;
   }else {
       return 0;
   }
}
// getAllPostsByCategory
function getAllPostsByCategory($conn, $category_id){
   $sql = "SELECT * FROM post  WHERE category=? AND publish=1";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$category_id]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
}
// getPostById
function getPostById($conn, $id) {
   $sql = "SELECT * FROM post WHERE post_id = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(1, $id, PDO::PARAM_INT);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
       return $stmt->fetch(PDO::FETCH_ASSOC);
   } else {
       return null;
   }
}


// getById Deep - Admin
function getByIdDeep($conn, $id){
   $sql = "SELECT * FROM post WHERE post_id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}

// serach
function search($conn, $key){
   # creating simple search temple :)  
   $key = "%{$key}%";

   $sql = "SELECT * FROM post 
           WHERE publish=1 AND (post_title LIKE ? 
           OR post_text LIKE ?)";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$key, $key]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}


//get 5 Categoies 

function get5Categoies($conn){
   $sql = "SELECT * FROM category LIMIT 5";
   $stmt = $conn->prepare($sql);
   $stmt->execute();

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetchAll();
         return $data;
   }else {
       return 0;
   }
}



function getUserByID($conn, $id){
   $sql = "SELECT id, fname, username FROM users WHERE id=?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$id]);

   if($stmt->rowCount() >= 1){
         $data = $stmt->fetch();
         return $data;
   }else {
       return 0;
   }
}



// Delete By ID
function deletePostById($conn, $id){
   $sql = "DELETE FROM post WHERE post_id=?";
   $stmt = $conn->prepare($sql);
   $res = $stmt->execute([$id]);
   return $stmt->rowCount();
}

// Update Post By ID
function updatePostById($conn, $post_id, $title, $author, $content, $category){
   $sql = "UPDATE post 
           SET post_title=?, post_author=?, post_text=?, category=? 
           WHERE post_id=?";
   $stmt = $conn->prepare($sql);
   $res = $stmt->execute([$title, $author, $content, $category, $post_id]);

   return $res;
}
