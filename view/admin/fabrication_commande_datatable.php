<?php
                    // on fait une boucle pour afficher tous les évenement
                    $get_event = new Manager_Evenements;
                      // $donnee doit être le tableau avec tous les evennements
                          $donnee= $get_event->Evenements();
                          if(is_null($donnee))
                          {
                            echo "Aucun Inscrits";
                          }
                          else
                          {
                            foreach ($donnee as $clef)
                            {
                              echo '  <div class="post-bar">
        											<div class="post_topbar">
        												<div class="usy-dt">
        													<img src="http://via.placeholder.com/50x50" alt="">
        													<div class="usy-name">
        														<h3> '.$clef['nom'].' '.$clef['prenom'].'</h3>
        														<span><img src="images/clock.png" alt="">'.$clef['date'].'</span>
        													</div>
        												</div>
        											</div>
        											<div class="epi-sec">
        												<ul class="descp">
        													<li><img src="images/icon8.png" alt=""></li>
        												</ul>
        												<ul class="bk-links">
        													<li><a href="messages.php" title=""><i class="la la-envelope"></i></a></li>
        													<li><p title="" class="bid_now">Profil</p></li>
        												</ul>
        											</div>
        											<div class="job_descp">
        												<h3>'.$clef['titre'].'</h3>
        												<p>'.$clef['description'].'</p>
        												<ul class="skill-tags">
        													<li><a href="#" title="">HTML</a></li>
        													<li><a href="#" title="">PHP</a></li>
        													<li><a href="#" title="">CSS</a></li>
        													<li><a href="#" title="">Javascript</a></li>
        													<li><a href="#" title="">Wordpress</a></li>
        													<li><a href="#" title="">Photoshop</a></li>
        													<li><a href="#" title="">Illustrateur</a></li>
        													<li><a href="#" title="">Corel Draw</a></li>
        												</ul>
        											</div>
        										</div><!--post-bar end--> ';
                          }
                        }
                          ?>
