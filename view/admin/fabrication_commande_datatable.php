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
                              echo '  <tr>
                                  <td>'.$clef['description'].'</td>
                                  <td>'.$clef['description'].'</td>
                                  <td>'.$clef['description'].'</td>
                                  <td>'.$clef['description'].'</td>
                              </tr> ';
                          }
                        }
                          ?>
