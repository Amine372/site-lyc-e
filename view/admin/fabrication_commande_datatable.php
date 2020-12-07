<?php
                    // on fait une boucle pour afficher tous les eleves
                    $get_event = new Manager_Datatable;
                      // $donnee doit être le tableau avec tous les eleves
                          $donnee= $get_event->Datatable();
                          if(is_null($donnee))
                          {
                            echo "Aucun Eleve";
                          }
                          else
                          {
                            foreach ($donnee as $clef)
                            {
                              echo '  <tr>
                                  <td>'.$clef['nom'].'</td>
                                  <td>'.$clef['prenom'].'</td>
                                  <td>'.$clef['role'].'</td>
                                  <td>'.$clef['mail'].'</td>
                              </tr> ';
                          }
                        }
                          ?>
