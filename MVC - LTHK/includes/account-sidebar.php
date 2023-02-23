			<!-- Account Sidebar START  -->
			<div class=" col-10 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
			  <div class="account-sidebar">
			    <div class="account-sidebar__welcome text-center ">
			      <div class="account-sidebar__welcome__image d-flex justify-content-center w-100 h-100">
			        <img src="../assets/images/account-welcome.png" class="w-50 h-50 rounded-circle" alt="">
			      </div>
			      <!-- Affichage du nom du user  -->
			      <div class="account-sidebar__welcome__name fsize-28 mt-4 "> Bienvenue
			        <br>
			        <span class="account-sidebar__welcome__customer-name"><?= $_SESSION['pseudo'] ?></span>
			      </div>
			      <!-- Bouton de déconnexion  -->
			      <div class="logout">
			        <a href="index.php?action=disconnect" class="disconnect"><span class="lightPurple">Se déconnecter ?</span></a>
			      </div>
			    </div>

			    <!-- Liste de liens pour les différentes pages de l'espace client  -->
			    <div class="border-all bradius-10 py-30 px-10 mt-4" data-aos="fade-right" data-aos-delay="100" data-aos-duration="500">
			      <ul class="ps-20">
			        <li class="account-sidebar__link mb-3">
			          <a href="index.php?action=informations" class="grey d-flex flex-row align-items-center position-relative">
			            <div>
			              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 16 16" class="transition-500 bi bi-person-circle" fill="currentColor">
			                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
			                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
			                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
			              </svg>
			            </div>
			            <div class="sidebar__link transition-400 position-relative ms-3">
			              Mes informations
			            </div>
			          </a>
			        </li>
			        <li class="account-sidebar__link mb-3">
			          <a href="index.php?action=address" class="grey d-flex flex-row align-items-center position-relative">
			            <div>
			              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 16 16" class="transition-500 bi bi-pencil" fill="currentColor">
			                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
			              </svg>
			            </div>
			            <div class="sidebar__link transition-400 position-relative ms-3">
			              Mes adresses
			            </div>
			          </a>
			        </li>
			        <li class="account-sidebar__link mb-3">
			          <a href="index.php?action=orders" class="grey d-flex flex-row align-items-center position-relative">
			            <div>
			              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 16 16" class="transition-500 bi bi-basket" fill="currentColor">
			                <path fill-rule="evenodd" d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
			              </svg>
			            </div>
			            <div class="sidebar__link transition-400 position-relative ms-3">
			              Mes commandes
			            </div>
			          </a>
			        </li>
			      </ul>
			    </div>

			  </div>
			</div>
			<!-- Account Sidebar END  -->