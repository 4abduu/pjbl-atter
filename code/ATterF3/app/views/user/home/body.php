<!-- This is a modal for welcome the new signup account! -->

<script src="assets/js/jquery-3.5.1.min.js"></script>
     
     <?php  if (isset($_SESSION['welcome'])) { ?>
       <script>
        $(document).ready(function(){
         // Open modal on page load
         $("#welcome").modal('show');
        });
       </script>
     
 
       <!-- Modal -->
 <div class="modal fade" id="welcome" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div  class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="">
         <div class="text-center">
          <span  class="modal-title font-weight-bold text-center" id="exampleModalLongTitle">
           <span style="font-size: 20px;">Welcome <span style="color:#207ce5"><?php echo $user->name; ?></span>  </span>  
          </span>
         </div>
         <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button> -->
       </div>
       <div class="modal-body">
         <div class="text-center">
        
         <h4 style="font-weight: 600; " >You've Signed up Successfully!</h4>
  
         </div>
         <p>This is Twitter clone is developed by <span style="font-weight: 700;">Amin Yasser</span>  for learning purpose.</p>
         <p>The clone project includes tweet , retweet , quote or even quote the quoted tweet , like tweet and nested comments.
           You can mention or add hashtag to yout tweet , change password or username.
           Follow or unfollow people. get notificaction if any action happen. Search users by name or username. and more!
         </p>
         <p>By default you followed
           <a style="color:#207ce5;" href="codeastro">@codeastro</a> 
             to see their tweets.</p>
       </div>
       
     </div>
   </div>
 </div>
 
       <?php unset($_SESSION['welcome']); } ?>
 
       <!-- End welcome -->
 
     <div id="mine">
  
     <div class="wrapper-left">
         <div class="sidebar-left">
           <div class="grid-sidebar" style="margin-top: 12px">
             <div class="icon-sidebar-align">
               <img src="<?php echo BASE_URL . "/assets/images/twitter-logo.png"; ?>" alt="" height="30px" width="30px" />
             </div>
           </div>
 
           <a href="home.php">
           <div class="grid-sidebar bg-active" style="margin-top: 12px">
             <div class="icon-sidebar-align">
               <img src="<?php echo BASE_URL . "/includes/icons/tweethome.png"; ?>" alt="" height="26.25px" width="26.25px" />
             </div>
             <div class="wrapper-left-elements">
               <a class="wrapper-left-active" href="home.php" style="margin-top: 4px;"><strong>Home</strong></a>
             </div>
           </div>
           </a>
   
            <a href="notification.php">
           <div class="grid-sidebar">
             <div class="icon-sidebar-align position-relative">
                 <?php if ($notify_count > 0) { ?>
               <i class="notify-count"><?php echo $notify_count; ?></i> 
               <?php } ?>
               <img
                 src="<?php echo BASE_URL . "/includes/icons/tweetnotif.png"; ?>"
                 alt=""
                 height="26.25px"
                 width="26.25px"
               />
             </div>
   
             <div class="wrapper-left-elements">
               <a href="notification.php" style="margin-top: 4px"><strong>Notifications</strong></a>
             </div>
           </div>
           </a>
         
             <a href="<?php echo BASE_URL . $user->username; ?>">
           <div class="grid-sidebar">
             <div class="icon-sidebar-align">
               <img src="<?php echo BASE_URL . "/includes/icons/tweetprof.png"; ?>" alt="" height="26.25px" width="26.25px" />
             </div>
   
             <div class="wrapper-left-elements">
               <!-- <a href="/twitter/<?php echo $user->username; ?>"  style="margin-top: 4px"><strong>Profile</strong></a> -->
               <a  href="<?php echo BASE_URL . $user->username; ?>"  style="margin-top: 4px"><strong>Profile</strong></a>
             
             </div>
           </div>
           </a>
           <a href="<?php echo BASE_URL . "account.php"; ?>">
           <div class="grid-sidebar ">
             <div class="icon-sidebar-align">
               <img src="<?php echo BASE_URL . "/includes/icons/tweetsetting.png"; ?>" alt="" height="26.25px" width="26.25px" />
             </div>
   
             <div class="wrapper-left-elements">
               <a href="<?php echo BASE_URL . "account.php"; ?>" style="margin-top: 4px"><strong>Settings</strong></a>
             </div>
            
             
           </div>
           </a>
           <a href="includes/logout.php">
           <div class="grid-sidebar">
             <div class="icon-sidebar-align">
             <i style="font-size: 26px;" class="fas fa-sign-out-alt"></i>
             </div>
   
             <div class="wrapper-left-elements">
               <a href="includes/logout.php" style="margin-top: 4px"><strong>Logout</strong></a>
             </div>
           </div>
           </a>
           <button class="button-twittear">
             <strong>Tweet</strong>
           </button>
   
           <div class="box-user">
             <div class="grid-user">
               <div>
                 <img
                   src="assets/images/users/<?php echo $user->img ?>"
                   alt="user"
                   class="img-user"
                 />
               </div>
               <div>
                 <p class="name"><strong><?php if($user->name !== null) {
                 echo $user->name; } ?></strong></p>
                 <p class="username">@<?php echo $user->username; ?></p>
               </div>
               
             </div>
           </div>
         </div>
       </div>
           
 
       <div class="grid-posts">
         <div class="border-right">
           <div class="grid-toolbar-center">
             <div class="center-input-search">
               <div class="input-group-login" id="whathappen">
                 
                 <div class="container">
                   <div class="part-1">
                     <div class="header">
                       <div class="home">
                         <h2>Home</h2>
                       </div>
                       <!-- <div class="icon">
                         <button type="button" name="button">+</button>
                       </div> -->
                     </div>
             
                     <div class="text">
                       <form class="" action="handle/handleTweet.php" method="post" enctype="multipart/form-data">
                         <div class="inner">
             
                             <img src="assets/images/users/<?php echo $user->img ?>" alt="profile photo">
                         
                           <label>
             
                             <textarea class="text-whathappen" name="status" rows="8" cols="80" placeholder="What's happening?"></textarea>
                         
                         </label>
                         </div> 
                             
                          <!-- tmp image upload place -->
                         <div class="position-relative upload-photo"> 
                           <img class="img-upload-tmp" src="assets/images/tweets/tweet-60666d6b426a1.jpg" alt="">
                           <div class="icon-bg">
                           <i id="#upload-delete-tmp" class="fas fa-times position-absolute upload-delete"></i>  
 
                           </div>
                         </div>
 
 
                         <div class="bottom"> 
                           
                           <div class="bottom-container">
                               
                             
                               
                            
                             <label for="tweet_img" class="ml-3 mb-2 uni">
 
                               <i class="fa fa-image item1-pair"></i>
                             </label>
                             <input class="tweet_img" id="tweet_img" type="file" name="tweet_img">    
                                 
                           </div>
                           <div class="hash-box">
                         
                               <ul style="margin-bottom: 0;">
 
 
                               </ul>
                           
                           </div>
                           <?php if (isset($_SESSION['errors_tweet'])) { 
                             
                             foreach($_SESSION['errors_tweet'] as $t) {?>
                             
                           <div class="alert alert-danger">
                           <span class="item2-pair"> <?php echo $t; ?> </span>
                           </div>
                          
                          <?php } } unset($_SESSION['errors_tweet']); ?>
                           <div>
                          
                             <span class="bioCount" id="count">140</span>
                             <input id="tweet-input" type="submit" name="tweet" value="Tweet" class="submit"
                             >
                           </div>
                       </div>
                       </form>
                     </div>
                   </div>
                   <div class="part-2">
             
                   </div>
             
                 </div>
                 
                 
               </div>
             </div>
             <!-- <div class="mt-icon-settings">
               <img src="https://i.ibb.co/W5T9ycN/settings.png" alt="" />
             </div> -->
           </div>
 
           <!-- BAGIAAANNNN TWEEEEEEEEEEEEEEEEEEEEEEEEEEEEET -->
 
           <div class="box-fixed" id="box-fixed"></div>
             
           <div class="box-tweet feed" style="position: relative;" >
        <a href="status/<?php echo $tweet_link; ?>">
        <span style="position:absolute; width:100%; height:100%; top:0;left: 0; z-index: 1;"></span>
        </a>
        <?php if ($retweet_sign) { ?>
        <span class="retweed-name"> <i class="fa fa-retweet retweet-name-i" aria-hidden="true"></i> 
        <a style="position: relative; z-index:100; color:rgb(102, 117, 130);" href="<?php echo $retweeted_user->username; ?> "> <?php  if($retweeted_user->id == $user_id) echo "You";
        else echo $retweeted_user->name; ?> </a>  retweeted</span>
        <?php } ?>
        <div class="grid-tweet">
        <a style="position: relative; z-index:1000" href="<?php echo $tweet_user->username;  ?>">
        <img
        src="assets/images/users/<?php echo $tweet_user->img; ?>"
        alt=""
        class="img-user-tweet"
        />
        </a >

        <div>
        <p> 
        <a style="position: relative; z-index:1000; color:black" href="<?php echo $tweet_user->username;  ?>">
        <strong> <?php echo $tweet_user->name ?> </strong> 
        </a>
        <span class="username-twitter">@<?php echo $tweet_user->username ?> </span>
        <span class="username-twitter"><?php echo $timeAgo ?></span>
        </p>
        <p class="tweet-links">
        <?php
        // check if it's quote or normal tweet
        if ($retweet_comment || $qoq)
        echo  Tweet::getTweetLinks($qoute);
        else echo  Tweet::getTweetLinks($tweet_real->status); ?>
        </p>
        <?php if ($retweet_comment == false && $qoq == false) { ?>
        <?php if ($tweet_real->img != null) { ?>
        <p class="mt-post-tweet">
        <img
        src="assets/images/tweets/<?php echo $tweet_real->img; ?>"
        alt=""
        class="img-post-tweet"
        />
        </p>
        <?php } } else { ?>
        <!-- qoued tweet place here --> 

        <div  class="mt-post-tweet comment-post" style="position: relative;">

        <a href="status/<?php echo $tweet_inner->id; ?>">
        <span class="" style="position:absolute; width:100%; height:100%; top:0;left: 0; z-index: 2;"></span>
        </a>
        <div class="grid-tweet py-3 "  > 

        <a style="position: relative; z-index:1000" href="<?php echo $user_inner_tweet->username;  ?>">
        <img
        src="assets/images/users/<?php echo $user_inner_tweet->img; ?>"
        alt=""
        class="img-user-tweet"
        />
        </a >

        <div>
        <p> 
        <a style="position: relative; z-index:1000; color:black" href="<?php echo $user_inner_tweet->username;  ?>">
        <strong> <?php echo $user_inner_tweet->name ?> </strong> 
        </a>
        <span class="username-twitter">@<?php echo $user_inner_tweet->username ?> </span>
        <span class="username-twitter"><?php echo $timeAgo_inner ?></span>
        </p>
        <p>
        <?php
        if ($qoq)
        echo Tweet::getTweetLinks($inner_qoute);
        else  echo  Tweet::getTweetLinks($tweet_inner->status); ?>
        </p>
        <?php   // don't show img if quote of quote
        if ($qoq == false) { 
        if ($tweet_inner->img != null) { ?>
        <p class="mt-post-tweet">
        <img
        src="assets/images/tweets/<?php echo $tweet_inner->img; ?>"
        alt=""
        class="img-post-retweet"
        />
        </p>
        <?php } } ?>

        </div> 

        </div>


        </div>

        <?php } ?>

        <div class="grid-reactions">
        <div class="grid-box-reaction">
        <div class="hover-reaction hover-reaction-comment comment"
        data-user = "<?php echo $user_id; ?>" 
        data-tweet = "<?php 
        if($retweet_sign)
        echo $retweeted_tweet->id;
        else  echo $tweet->id; ?>">

        <i class="far fa-comment"></i>
        <div class="mt-counter likes-count d-inline-block">
        <p> <?php if($comment_count > 0) echo $comment_count; ?>  </p>
        </div>
        </div>
        </div>
        <div class="grid-box-reaction">

        <div  class="hover-reaction hover-reaction-retweet
        <?= $user_retweeted_it ? 'retweeted' : 'retweet' ?> option"
        data-tweet="<?php
        // send the tweet you wanna undo retweet to undo function
        // if the user retweeted it and it's the real tweet
        // to send the id of retweeted tweet
        // if($user_retweeted_it && !$retweet_sign)
        // echo Tweet::retweetRealId($tweet->id);
        // else
        echo $tweet->id ;
        ?>" 
        data-user="<?php echo $user_id; ?>
        "
        data-retweeted = "<?php echo $user_retweeted_it; ?>"
        data-sign = "<?php echo $retweet_sign; ?>"
        data-tmp="<?php echo $retweet_comment; ?>"
        data-qoq="<?php echo $qoq; ?>">



        <i class="fas fa-retweet"></i>
        <div class="mt-counter likes-count d-inline-block">
        <p><?php if($retweets_count > 0)  echo $retweets_count ; ?></p>
        </div>



        </div>

        <div class="options">

            
        </div> 

        </div>
        <div  class="grid-box-reaction"  >
        <a class="hover-reaction hover-reaction-like 
        <?= $user_like_it ? 'unlike-btn' : 'like-btn' ?> " 
        data-tweet="<?php 
        if($retweet_sign) {
            if($retweet->tweet_id != null) {
            echo $retweet->tweet_id;
            } echo $retweet->retweet_id;
        }  else echo $tweet->id ;
        //  echo Tweet::likedTweetRealId($tweet->id);

        ?>" 
        data-user="<?php echo $user_id; ?>">


        <i class="fa-heart <?= $user_like_it ? 'fas' : 'far mt-icon-reaction' ?>"></i>
        <!-- <i class="fas fa-heart liked"></i> -->

        <div class="mt-counter likes-count d-inline-block">
        <p> <?php if($likes_count > 0)  echo $likes_count ; ?> </p>
        </div>
        </a>


        </div>

        <div class="grid-box-reaction">
        <div class="hover-reaction hover-reaction-comment">

        <i class="fas fa-ellipsis-h mt-icon-reaction"></i>
        </div>
        <div class="mt-counter">
        <p></p>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>


        <div class="popupTweet">

        </div>
        <div class="popupComment">

        </div>

 
         </div>
 
 
         <div class="wrapper-right">
             <div style="width: 90%;" class="container">
 
           <div class="input-group py-2 m-auto pr-5 position-relative">
 
           <i id="icon-search" class="fas fa-search tryy"></i>
           <input type="text" class="form-control search-input"  placeholder="Search Twitter">
           <div class="search-result">
 
 
           </div>
           </div>
           </div>
 
 
        
 
             
           <div class="box-share">
             <p class="txt-share"><strong>Who to follow</strong></p>
             <?php 
             foreach($who_users as $user) { 
               //  $u = User::getData($user->user_id);
                $user_follow = Follow::isUserFollow($user_id , $user->id) ;
                ?>
           <div class="grid-share">
           <a style="position: relative; z-index:5; color:black" href="<?php echo $user->username;  ?>">
                       <img
                         src="assets/images/users/<?php echo $user->img; ?>"
                         alt=""
                         class="img-share"
                       />
                     </a>
                     <div>
                       <p>
                       <a style="position: relative; z-index:5; color:black" href="<?php echo $user->username;  ?>">  
                       <strong><?php echo $user->name; ?></strong>
                       </a>
                     </p>
                       <p class="username">@<?php echo $user->username; ?>
                       <?php if (Follow::FollowsYou($user->id , $user_id)) { ?>
                   <span class="ml-1 follows-you">Follows You</span></p>
                   <?php } ?></p>
                     </div>
                     <div>
                       <button class="follow-btn follow-btn-m 
                       <?= $user_follow ? 'following' : 'follow' ?>"
                       data-follow="<?php echo $user->id; ?>"
                       data-user="<?php echo $user_id; ?>"
                       data-profile="<?php echo $u_id; ?>"
                       style="font-weight: 700;">
                       <?php if($user_follow) { ?>
                         Following 
                       <?php } else {  ?>  
                           Follow
                         <?php }  ?> 
                       </button>
                     </div>
                   </div>
 
                   <?php }?>
          
           
           </div>
   
   
         </div>
       </div>
       </div> 