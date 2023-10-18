<?php 

// class Home_models {
//     private $table_aboutUs = 'about_us';
//     private $table_contactUs = 'contact_us';
//     private $table_footer = 'footer';
//     private $table_home = 'home';
//     private $table_openingHours = 'opening_hours';
//     private $table_ourService = 'our_service';
//     private $table_portfolio = 'portfolio';
//     private $table_game = 'game';
//     private $table_animasi = 'animasi';
//     private $table_services = 'services';
//     private $table_socialMedia = 'social_media';
//     private $table_telephone = 'telephone';
//     private $table_login = 'user';
//     private $db;

//     public function __construct()
//     {
//         $this->db = new Database;
//     }

//     // ===== LOGIN =====
//     public function getAllUser()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_login);
//         return $this->db->resultSet();
//     }

//     public function login($data) {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $username = $_POST['name'];
//             $password = $_POST['password'];
//             $last_login = time();

//             $dbHost = 'localhost';
//             $dbUser = 'root';
//             $dbPassword = '';
//             $dbName = 'unimasoft';

//             try {
//                 $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
//                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//                 // Check if the username exists in the database
//                 $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
//                 $stmt->execute([$username]);
//                 $user = $stmt->fetch(PDO::FETCH_ASSOC);

//                 if ($user && password_verify($password, $user['password'])) {
//                     $query =    "UPDATE user SET
//                                     last_login = :last_login
//                                 WHERE id = :id";
        
//                         $this->db->query($query);
//                         $this->db->bind('last_login', $last_login);
//                         $this->db->bind('id', $data['id']);
//                     // Login successful
//                     session_start();
//                     $_SESSION['user_id'] = $user['id'];
//                     header('Location: ' . BASEURL . '/dashboard'); // Redirect to the dashboard or another page
//                     exit();
//                 } else {
//                     // Invalid credentials
//                     $error = "Invalid username or password";
//                 }
//             } catch (PDOException $e) {
//                 echo "Database Error: " . $e->getMessage();
//             }
//         }
//     }

//     // ===== ABOUT US =====

//     public function getAllAbout()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_aboutUs);
//         return $this->db->resultSet();
//     }

//     public function getAboutById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_aboutUs . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataAbout($data)
//     {
//         $query = "INSERT INTO about_us
//                     VALUES
//                   ('', :p)";
        
//         $this->db->query($query);
//         $this->db->bind('p', $data['p']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataAbout($id)
//     {
//         $query = "DELETE FROM about_us WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataAbout($data)
//     {
//         $query = "UPDATE about_us SET
//                     p = :p
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('p', $data['p']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function cariDataAbout()
//     {
//         $keyword = $_POST['keyword'];
//         $query = "SELECT * FROM about_us WHERE p LIKE :keyword";
//         $this->db->query($query);
//         $this->db->bind('keyword', "%$keyword%");
//         return $this->db->resultSet();
//     }

//     // ===== CONTACT US =====
//     public function getAllContact()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_contactUs);
//         return $this->db->resultSet();
//     }

//     public function getContactById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_contactUs . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataContact($data)
//     {
//         $query = "INSERT INTO contact_us
//                     VALUES
//                   ('', :link, :p)";
        
//         $this->db->query($query);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('p', $data['p']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataContact($id)
//     {
//         $query = "DELETE FROM contact_us WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataContact($data)
//     {
//         $query = "UPDATE contact_us SET
//                     p = :p,
//                     maps = :maps,
//                     linkIG = :linkIG,
//                     linkFB = :linkFB,
//                     linkNomor = :linkNomor,
//                     nomor = :nomor
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('p', $data['p']);
//         $this->db->bind('maps', $data['maps']);
//         $this->db->bind('linkIG', $data['linkIG']);
//         $this->db->bind('linkFB', $data['linkFB']);
//         $this->db->bind('linkNomor', $data['linkNomor']);
//         $this->db->bind('nomor', $data['nomor']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== FOOTER ===== 
//     public function getAllFooter()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_footer);
//         return $this->db->resultSet();
//     }

//     public function getFooterById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_footer . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function uploadImageFooter()
//     {
//         $targetDir = 'img/datafoto'; 
//         $temp = $_FILES['img']['name'];
//         $imageFileType = explode('.', $temp);
//         $imageFileType = strtolower(end($imageFileType));

//         // validasi ekstensi file
//         // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
//         if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
//             echo "Sorry, only JPG, JPEG & PNG files are allowed.";
//             exit;
//         }

//         $fileName = uniqid();
//         $fileName .= '.';
//         $fileName .= $imageFileType;
//         $targetFile = $targetDir . $fileName; // nama file upload

//         // cek gambar diupload atau tidak
//         if ($_FILES["img"]["error"] === 4) {
//             echo
//             '
//             <script>
//                 alert("Silahkan Upload Gambar")
//             </script>
//         ';
//             return false;
//         }

//         // validasi ukuran file
//         if ($_FILES["img"]["size"] > 10000000) {
//             echo
//             '
//                 <script>
//                     alert("Ukuran File Terlalu Besar")
//                 </script>
//             ';
//             return false;
//         }

//         try {
//             // simpan file upload ke direktori
//             move_uploaded_file($_FILES['img']['tmp_name'], $targetFile);
//         } catch (IOExceptionInterface $e) {
//             echo $e->getMessage();
//         }

//         return $fileName;
//     }

//     public function tambahDataFooter($data)
//     {
//         $foto = $this->uploadImageFooter();
//         if (!$foto) {
//             return false;
//         };

//         $query = "INSERT INTO footer
//                     VALUES
//                   ('', :img, :title, :p)";
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('title', $data['title']);
//         $this->db->bind('p', $data['p']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataFooter($id)
//     {
//         $query = "DELETE FROM footer WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataFooter($data)
//     {
//         $query = "UPDATE footer SET
//                     img = :img,
//                     title = :title,
//                     p = :p
//                   WHERE id = :id";

//         if ($_FILES["img"]["error"] === 4) {
//             $foto = $data['fotoLama'];
//         } else {
//             $foto = $this->uploadImage();
//         }
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('title', $data['title']);
//         $this->db->bind('p', $data['p']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== HOME =====
//     public function getAllHome()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_home);
//         return $this->db->resultSet();
//     }

//     public function getHomeById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_home . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataHome($data)
//     {
//         $query = "INSERT INTO home
//                     VALUES
//                   ('', :h1, :p)";
        
//         $this->db->query($query);
//         $this->db->bind('h1', $data['h1']);
//         $this->db->bind('p', $data['p']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataHome($id)
//     {
//         $query = "DELETE FROM home WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataHome($data)
//     {
//         $query = "UPDATE home SET
//                     h1 = :h1,
//                     p = :p
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('h1', $data['h1']);
//         $this->db->bind('p', $data['p']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== OPENING HOURS =====
//     public function getAllOpen()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_openingHours);
//         return $this->db->resultSet();
//     }

//     public function getOpenById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_openingHours . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataOpen($data)
//     {
//         $query = "INSERT INTO opening_hours
//                     VALUES
//                   (NULL, :li)";
        
//         $this->db->query($query);
//         $this->db->bind('li', $data['li']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataOpen($id)
//     {
//         $query = "DELETE FROM opening_hours WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataOpen($data)
//     {
//         $query = "UPDATE opening_hours SET
//                     li = :li
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('li', $data['li']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function getAllService()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_ourService);
//         return $this->db->resultSet();
//     }

//     public function getServiceById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_ourService . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataService($data)
//     {
//         $query = "INSERT INTO our_service
//                     VALUES
//                   ('', :link, :li)";
        
//         $this->db->query($query);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('li', $data['li']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataService($id)
//     {
//         $query = "DELETE FROM our_service WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataService($data)
//     {
//         $query = "UPDATE our_service SET
//                     link = :link,
//                     li = :li
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('li', $data['li']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== PORTFOLIO =====
//     public function getAllPortfolio()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_portfolio);
//         return $this->db->resultSet();
//     }

//     public function getPortfolioById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_portfolio . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function uploadImage()
//     {
//         $targetDir = 'img/datafoto/'; 
//         $temp = $_FILES['img']['name'];
//         $imageFileType = explode('.', $temp);
//         $imageFileType = strtolower(end($imageFileType));

//         // validasi ekstensi file
//         // $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
//         if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
//             echo "Sorry, only JPG, JPEG & PNG files are allowed.";
//             exit;
//         }

//         $fileName = uniqid();
//         $fileName .= '.';
//         $fileName .= $imageFileType;
//         $targetFile = $targetDir . $fileName; // nama file upload

//         // cek gambar diupload atau tidak
//         if ($_FILES["img"]["error"] === 4) {
//             echo
//             '
//             <script>
//                 alert("Silahkan Upload Gambar")
//             </script>
//         ';
//             return false;
//         }

//         // validasi ukuran file
//         if ($_FILES["img"]["size"] > 10000000) {
//             echo
//             '
//                 <script>
//                     alert("Ukuran File Terlalu Besar")
//                 </script>
//             ';
//             return false;
//         }

//         try {
//             // simpan file upload ke direktori
//             move_uploaded_file($_FILES['img']['tmp_name'], $targetFile);
//         } catch (IOExceptionInterface $e) {
//             echo $e->getMessage();
//         }

//         return $fileName;
//     }

//     public function tambahDataPortfolio($data)
//     {
//         $foto = $this->uploadImage();
//         if (!$foto) {
//             return false;
//         };

//         $query = "INSERT INTO portfolio
//                     VALUES
//                   (NULL, :img, :h2, :span, :link)";
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataPortfolio($id)
//     {
//         $query = "DELETE FROM portfolio WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataPortfolio($data)
//     {
//         $query = "UPDATE portfolio SET
//                     img = :img,
//                     h2 = :h2,
//                     span = :span,
//                     link = :link
//                   WHERE id = :id";

//         if ($_FILES["img"]["error"] === 4) {
//             $foto = $data['fotoLama'];
//         } else {
//             $foto = $this->uploadImage();
//         }
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== GAME =====
//     public function getAllGame()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_game);
//         return $this->db->resultSet();
//     }

//     public function getGameById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_game . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataGame($data)
//     {
//         $foto = $this->uploadImage();
//         if (!$foto) {
//             return false;
//         };

//         $query = "INSERT INTO game
//                     VALUES
//                   (NULL, :img, :h2, :span, :link)";
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataGame($id)
//     {
//         $query = "DELETE FROM game WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataGame($data)
//     {
//         $query = "UPDATE game SET
//                     img = :img,
//                     h2 = :h2,
//                     span = :span,
//                     link = :link
//                   WHERE id = :id";

//         if ($_FILES["img"]["error"] === 4) {
//             $foto = $data['fotoLama'];
//         } else {
//             $foto = $this->uploadImage();
//         }
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== ANIMASI =====
//     public function getAllAnimasi()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_animasi);
//         return $this->db->resultSet();
//     }

//     public function getAnimasiById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_animasi . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataAnimasi($data)
//     {
//         $foto = $this->uploadImage();
//         if (!$foto) {
//             return false;
//         };

//         $query = "INSERT INTO animasi
//                     VALUES
//                   (NULL, :img, :h2, :span, :link)";
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataAnimasi($id)
//     {
//         $query = "DELETE FROM animasi WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataAnimasi($data)
//     {
//         $query = "UPDATE animasi SET
//                     img = :img,
//                     h2 = :h2,
//                     span = :span,
//                     link = :link
//                   WHERE id = :id";

//         if ($_FILES["img"]["error"] === 4) {
//             $foto = $data['fotoLama'];
//         } else {
//             $foto = $this->uploadImage();
//         }
        
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h2', $data['h2']);
//         $this->db->bind('span', $data['span']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== SERVICES =====
//     public function getAllServices()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_services);
//         return $this->db->resultSet();
//     }

//     public function getServicesById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_services . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataServices($data)
//     {
//         $query = "INSERT INTO services
//                     VALUES
//                   ('', :img, :h4)";
        
//         $this->db->query($query);
//         $this->db->bind('img', $data['img']);
//         $this->db->bind('h4', $data['h4']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataServices($id)
//     {
//         $query = "DELETE FROM services WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataServices($data)
//     {
//         $query = "UPDATE services SET
//                     img = :img,
//                     h4 = :h4
//                   WHERE id = :id";

//         if ($_FILES["img"]["error"] === 4) {
//             $foto = $data['fotoLama'];
//         } else {
//             $foto = $this->uploadImage();
//         }
//         $this->db->query($query);
//         $this->db->bind('img', $foto);
//         $this->db->bind('h4', $data['h4']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== SOCIAL MEDIA =====
//     public function getAllSocial()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_socialMedia);
//         return $this->db->resultSet();
//     }

//     public function getSocialById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_socialMedia . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataSocial($data)
//     {
//         $query = "INSERT INTO social_media
//                     VALUES
//                   ('', :icon, :link)";
        
//         $this->db->query($query);
//         $this->db->bind('icon', $data['icon']);
//         $this->db->bind('link', $data['link']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataSocial($id)
//     {
//         $query = "DELETE FROM social_media WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataSocial($data)
//     {
//         $query = "UPDATE social_media SET
//                     icon = :icon
//                     link = :link
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('icon', $data['icon']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     // ===== TELEPHONE =====
//     public function getAllTelephone()
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_telephone);
//         return $this->db->resultSet();
//     }

//     public function getTelephoneById($id)
//     {
//         $this->db->query('SELECT * FROM ' . $this->table_telephone . ' WHERE id=:id');
//         $this->db->bind('id', $id);
//         return $this->db->single();
//     }

//     public function tambahDataTelephone($data)
//     {
//         $query = "INSERT INTO telephone
//                     VALUES
//                   ('', :icon, :link, :nomor)";
        
//         $this->db->query($query);
//         $this->db->bind('icon', $data['icon']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('nomor', $data['nomor']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }

//     public function hapusDataTelephone($id)
//     {
//         $query = "DELETE FROM telephone WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('id', $id);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }


//     public function ubahDataTelephone($data)
//     {
//         $query = "UPDATE telephone SET
//                     icon = :icon,
//                     link = :link,
//                     nomor = :nomor
//                   WHERE id = :id";
        
//         $this->db->query($query);
//         $this->db->bind('icon', $data['icon']);
//         $this->db->bind('link', $data['link']);
//         $this->db->bind('nomor', $data['nomor']);
//         $this->db->bind('id', $data['id']);

//         $this->db->execute();

//         return $this->db->rowCount();
//     }
// }