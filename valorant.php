<?php
        include ("Commun/header.php");
    ?>
        <main>
            <section class="main">
                <div class="section left_block">
                    <div class="mrg">
                        <div class="calendrier"> 
                            <table class="table">
                                <p class="mois">Mars</p>
                                <tr class="letter">
                                    <td>Mon</td>
                                    <td>Tue</td>
                                    <td>Wed</td>
                                    <td>Thu</td>
                                    <td>Fri</td>
                                    <td>Sat</td>
                                    <td>Sun</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                    <tr>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>12</td>
                                    <td>13</td>
                                    <td>14</td>
                                    <td>15</td>
                                    <td>16</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>19</td>
                                    <td>20</td>
                                    <td>21</td>
                                    <td>22</td>
                                    <td>23</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>26</td>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>31</td>
                                </tr>
                            </table>
                        </div>
                        <div class="comp">
                            <nav class="nav_main">
                                <ul class="list_game">
                                    <h2 class="h2_comp">Compétition e-sport</h2>
                                    <li>League of Legend</li>
                                    <li>Call of Duty</li>
                                    <li>Valorant</li>
                                    <li>FIFA</li>
                                    <li>Dota 2</li>
                                    <li>Rainbow six siege</li>
                                    <li>Rocket League</li>
                                    <li>Overwatch 2</li>
                                    <li>Trackmania</li>
                                    <li>Fortnite</li>
                                    <li>PUBG</li>
                                    <li>Super Smash Bros Ultimate</li>
                                    <li>Street Fighter 6</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="section middle_block">
                    <div>
                        <div class="online">
                            <h3 class="direct">Résultat en Direct - <span class="league">League of Legend</span></h3>
                        </div>
                        <div>
                          <h4 class="shoot">LEC 2024 Spring</h4>
                            <div class="match">
                            <?php
                            
                            $apiKey = 'X1H4ywecvwaZOkAU948OA96TWh5Q_n1rF0EiNux6gP9WblsEpE0';
                            $endpoint = 'https://api.pandascore.co/valorant/matches/past?token=' . $apiKey;
                            
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $endpoint);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            
                            $response = curl_exec($ch);
                            curl_close($ch);
                            
                            $data = json_decode($response, true);
                            
                            foreach ($data as $match) {

                                $team1 = $match['opponents'][0]['opponent'];
                                $team2 = $match['opponents'][1]['opponent'];
                                $dateTime = new DateTime($match['begin_at']); // Create a DateTime object from the match begin_at
                            ?>
                            <ul class="face">

                                <div class="azerty ">
                                    <li> <?php echo '<span>' . $team1['name'] . '</span>'; echo ' <img src="' . $team1['image_url'] . '" alt="' . $team1['name'] . ' logo" style="height:20px; vertical-align: middle;margin-:5px;">'; '<br>'; ?></li>
                                </div>

                                <div class="azerty">
                                    <li class="time_score"> <?php echo '' . $dateTime->format('d-m-y H:i') . '<br>'; ?></li>
                                    <li> <?php echo '' . $match['results'][0]['score'] . ' - ' . $match['results'][1]['score'] . '<br>';2 ?></li>
                                </div>

                                <div class="azerty">
                                    <li> <?php echo ' <img src="' . $team2['image_url'] . '" alt="' . $team2['name'] . ' logo" style="height:20px; vertical-align: middle; margin-right:5px;">'; echo '<span>' . $team2['name'] . '</span>'; '<br>'; ?></li>
                                </div>
                            </ul>

                                <?php
                                }
                                ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="section right_block">
                    <img class="picture" src="./Asset/img/Valorant_logo.svg (2).png" alt="af">
                    <div class="mrg">
                        <div class="pub">Pub</div>
                    </div>
                </div>
            </section>
            <section class="article">
                <article>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
                </article>
                <article>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
                </article>
                <article>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
                </article>
                <article>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><img class="img" src="./Asset/img/e-score_logo_violet.png" alt=""></a>
                    <a href="https://www.google.fr/" target="_blank" rel="noopener noreferrer"><p>EXEMPLE EXEMPLE EXEMPLE</p></a>
                </article>
            </section>
        </main>
        <!-- ECRITURE EN PHP -->
        <?php
            include ("Commun/footer.php");
        ?>