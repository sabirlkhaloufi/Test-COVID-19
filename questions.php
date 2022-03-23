<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>

    <?php include './components/header.php'; ?>
    <main class="container w-75">
        <div class="stiper d-flex justify-content-around my-3">
            <div class="Info d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Informations</p>
            </div>
            <div class="Ques d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Questionnaire</p>
            </div>
            <div class="Res d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Résulats</p>
            </div>
        </div>


        <div class="progress">
            <div class="progress-bar btn-primary">
                <span class="nbr-Q"></span>
            </div>
        </div>
        <div class="Questions pt-5 bg-light">
            <div id="carouselExampleControls" class="carousel slide h-75" data-bs-interval="false">
                <div class="carousel-inner">

                    <div class="Q-1 carousel-item active px-5 py-3">
                        <h4 class="text-center">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours (frissons, sueurs) ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>
                    </div>

                    <div class=" Q-2 carousel-item px-5 py-3">
                        <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-3 carousel-item px-5 py-3">
                        <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-4 carousel-item px-5 py-3">
                        <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-5 carousel-item px-5 py-3">
                        <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-6 carousel-item px-5 py-3">
                        <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>
                    <div class=" Q-7 carousel-item px-5 py-3">
                        <h4 class="text-center">Ces derniers jours, avez-vous une fatigue inhabituelle qui vous a obligé à vous reposer plus de la moitié de la journée ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-8 carousel-item px-5 py-3">
                        <h4 class="text-center">Avez-vous des difficultés importantes pour vous alimenter ou boire depuis plus de 24h ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-9 carousel-item px-5 py-3">
                        <h4 class="text-center">Dans les dernières 24 heures, avez-vous noté un manque de souffle inhabituel lorsque vous parlez ou faites un petit effort ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-check"></i>
                                    <span>oui</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fas fa-times"></i>
                                    <span>non</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-10 carousel-item px-5 py-3">
                        <h4 class="text-center">Actuellement, comment vous vous sentez ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-laugh-beam"></i>
                                    <span>Bien</span>
                                </div>
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-smile-beam"></i>
                                    <span>Assez bien</span>
                                </div>
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="far fa-frown"></i>
                                    <span>Fatigué(e)</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-tired"></i>
                                    <span>Très fatigué(e)</span>
                                </div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>
                    <div class=" Q-11 carousel-item px-5 py-3">
                        <h4 class="text-center">Quel est votre âge ? Ceci, afin de calculer un facteur de risque spécifique.</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex justify-content-center mt-5 w-100">
                                <input class="inputAgePoids p-2" type="number" min="15" max="115" placeholder="15-115">
                                <div class="ansKg p-2 bg-header">ans</div>
                            </div>
                            <div class="form-check">
                            </div>
                        </div>

                    </div>

                    <div class=" Q-12 carousel-item px-5 py-3">
                        <h4 class="text-center">Quel est votre poids ? Afin de calculer l’indice de masse corporelle qui est un facteur influençant le risque de complications de l’infection.</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex justify-content-center w-100 mt-5">
                                <input class="inputAgePoids p-2" type="number" min="20" max="300" placeholder="20-300">
                                <div class="ansKg p-2 bg-header">Kg</div>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-13 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>

                <div class=" Q-14 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>

                <div class=" Q-15 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>

                <div class=" Q-16 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-17 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-18 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-19 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-20 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-21 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-22 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>
                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>
                <div class=" Q-23 carousel-item px-5 py-3">
                    <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                    <div class="reponse d-flex justify-content-center mt-5">
                        <div class="form-check d-flex gap-5">
                            <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-check"></i>
                                <span>oui</span>
                            </div>

                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                <i class="fas fa-times"></i>
                                <span>non</span>
                            </div>
                        </div>
                        <div class="form-check">
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="button d-flex justify-content-between mt-4 px-3 pb-3">
            <button class="btn-prv btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                Précedent
            </button>
            <button class="btn-next btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                Suivant
            </button>
        </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
</body>

</html>