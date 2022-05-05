<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Trivia Stack | Registrazione</title>

        <!-- STYLE -->
        <link rel="stylesheet" href="../../src/css/general.css" />
        <link rel="stylesheet" href="registrazione.css">

        <!-- SCRIPT -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#nome").on({
                    change: function () {
                        if (validaNome()) {
                            $("#divCognome").fadeIn();
                        }
                    },
                });
                $("#cognome").on({
                    change: function () {
                        if (validaCognome()) $("#divEmail").fadeIn();
                    },
                });
                $("#email").on({
                    change: function () {
                        if (validaEmail()) {
                            $("#divUsername").fadeIn();
                        }
                    },
                });
                $("#username").on({
                    change: function () {
                        if (validaUsername()) {
                            $("#divPassword").fadeIn();
                        }
                    },
                });
                $("#password").on({
                    change: function () {
                        if (validaPassword()) {
                            $("#divPasswordConf").fadeIn();
                        }
                    },
                });
                $("#passwordconferma").on({
                    change: function () {
                        if (validaPasswordConf()) $("#divSubmit").fadeIn();
                    },
                });
            });
        </script>
    </head>
    <body>
        <?php 
            if (isset($_COOKIE['username'])) {
                header("location: ../../");
            }
        ?>
        <!-- NAVBAR -->
        <div class="navbar">
            <div class="navbar-logo">
                <a href="../../">
                    <img src="../../src/images/logo.png" alt="Logo Trivia Stack" />
                </a>
            </div>
            <div class="navbar-user">
                <a class='login' href='../accesso/'>Accedi</a>
                <a class='button' href='./'>Registrati</a>
            </div>
        </div>
        <!-- REGISTRAZIONE -->
        <div class="container">
            <div class="pannello">
                <div class="descrizione">
                    <h2>Registrazione</h2>
                    <h3>Crea il tuo account e intraprendi una sfida!</h3>
                    <a href="../accesso/"> Sei già registrato?</a>
                </div>
                <form name="formregistrazione" id="form">
                    <div class="grid">
                        <div id="divNome" class="form-control">
                            <label for="nome">Nome</label>
                            <input
                                type="text"
                                id="nome"
                                name="nomeUtente"
                                placeholder="Il tuo nome"
                            />
                            <small></small>
                        </div>
                        <div id="divCognome" class="form-control">
                            <label for="cognome">Cognome</label>
                            <input
                                type="text"
                                id="cognome"
                                name="cognomeUtente"
                                placeholder="Il tuo cognome"
                            />
                            <small></small>
                        </div>
                        <div id="divEmail" class="form-control">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="emailUtente"
                                placeholder="example@mail.com"
                            />
                            <small></small>
                        </div>
                        <div id="divUsername" class="form-control">
                            <label for="username">Username</label>
                            <input
                                type="text"
                                id="username"
                                name="nomeUtente"
                                placeholder="Deve contenere almeno 8 caratteri"
                            />
                            <small></small>
                        </div>
                        <div id="divPassword" class="form-control">
                            <label for="password">Password </label>
                            <input
                                type="password"
                                id="password"
                                name="passwordUtente"
                                placeholder="Deve contenere almeno 8 caratteri"
                            />
                            <small></small>
                        </div>
                        <div id="divPasswordConf" class="form-control">
                            <label for="passwordconferma"
                                >Conferma Password
                            </label>
                            <input
                                type="password"
                                id="passwordconferma"
                                name="passwordConfermaUtente"
                                placeholder="Conferma la tua password"
                            />
                            <small></small>
                        </div>
                    </div>
                    <div id="divSubmit" class="divSubmit">
                        <button class="submit button" type="submit">Registrami</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="validaRegistrazione.js"></script>
    </body>
</html>
