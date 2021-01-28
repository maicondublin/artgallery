<a class="simple-text" href="Dashboard.php">Dashboard</a></div>
                <ul class="list-group">
                    <?php
                        if($_SESSION['permission'] == $admin){
                            echo '

                            <li class="list-group-item"><a href="artists.php">Artist List</a></li>
                            <li class="list-group-item"><a href="create_artist.php">Create Artist</a></li>
                            <li class="list-group-item"><a href="arts.php">Art List</a></li>
                            <li class="list-group-item"><a href="create_art.php">Create Art</a></li>
                            <li class="list-group-item"><a href="accounts.php">Admin List</a></li>
                            <li class="list-group-item"><a href="create_admin.php">Create Admin</a></li>

                            ';
                        } else if($_SESSION['permission'] == $customer){
                            echo '
                            <li class="list-group-item"><a href="art_list.php">Art List</a></li>
                           
                            <li class="list-group-item"><a href="user_settings.php">User Setting</a></li>
                            ';
                        }
                    ?>
                     <!-- <li class="list-group-item"><a href="gallery.php">My Likes</a></li>
                    <li class="list-group-item"><a href="my-favorite.php">My Favorites</a></li> -->
                    <li class="list-group-item"><a href="logout.php">Logout</a></li>
                </ul>


