@extends('layout')
@section('title')
    <title>Inscription De Réalisateur de Projet</title>
@endsection
@section('link')
    <link rel="stylesheet" href="./css/style_ReaProjet.css" />
@endsection
@section('body')
@include('navbar')
     <div class="d-flex justify-content-center align-items-center divCon mt-5">
    <form class="border border-light p-5 divConnect needs-validation" action="#" novalidate>
      <img class="img-fluid rounded-circle mx-auto d-block" src="./img/fav_png150vct.png" alt="Logo" />
      <p class="h4 mb-4 text-center">Inscrivez-vous en tant que Réalisateur de Projet</p>

      <div class="row">
        <div class="form-group col">
          <label for="nom">Nom<span id="important">*</span></label>
          <input type="text" name="nom" class="form-control" id="nom" placeholder="ex : Payet" required />
          <div class="invalid-feedback">
            Entrez un nom
          </div>
        </div>
        &nbsp;&nbsp;&nbsp;
        <div class="form-group col">
          <label for="prenom">Prénom<span id="important">*</span></label>
          <input type="text" name="prenom" class="form-control" id="prenom" placeholder="ex : Marc" required />
          <div class="invalid-feedback">
            Entrez un prénom
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="naissance">Date de Naissance<span id="important">*</span></label>
        <input class="form-control" name="naissance" type="date" value="" id="naissance" required />
        <div class="invalid-feedback">
          Entrez votre Date de naissance
        </div>
      </div>
      <div class="form-group">
        <label>Statut</label>
        <select name="statut" class="custom-select" id="statut">
          <option value="" selected>Statut</option>
          <option value="Etudiant">Etudiant</option>
          <option value="">Formateur</option>
          <option value="">Demandeur d'emploi</option>
          <option value="">Salarié</option>
          <option value="">Etrepreneur</option>
          <option value="ajouter">Ajouter</option>
        </select>
      </div>
      <div id="ecole" class="form-group">
        <label>École</label>
        <select name="Ecole" class="custom-select" id="Ecole">
          <option value="" selected>Ecoles</option>
          <option value="universitéDenis">Université de La Réunion</option>
          <option value="IUTPierre">IUT Saint-Pierre</option>
          <option value="IAE">IAE</option>
          <option value="ajouter">Ajouter</option>
        </select>
      </div>
      <div class="form-group">
        <label for="domaine">Domaine</label>
        <select name="Domains" id="Domaines" class="custom-select">
          <option value="" selected>Domaines</option>
          <option value="">Informatique - Réseau - Télécom -</option>
          <option value="">Économie - Droit juridique - Politique</option>
          <option value="">Électricité - Électronique - Robotique - Mécanique</option>
        </select>
      </div>
      <div class="form-group">
        <label>Niveau d'études</label>
        <select name="diplome" class="custom-select col" id="diplome">
          <option value="" selected>Niveaux</option>
          <option value="<">
            < BAC</option> <option value="1">BAC +1
          </option>
          <option value="2">BAC +2</option>
          <option value="3">BAC +3</option>
          <option value="4">BAC +4</option>
          <option value="5">BAC +5</option>
          <option value="6">BAC +6</option>
          <option value="7">BAC +7</option>
          <option value="8">BAC +8</option>
        </select>
      </div>
      <!-- Email -->
      <div class="form-group">
        <label for="login">Adresse E-Mail<span id="important">*</span></label>
        <input type="email" name="mail" id="mail" class="form-control" placeholder="ex : MarcPayet97@gmail.com" required />
        <div class="invalid-feedback">
          Entrez une adresse mail.
        </div>
      </div>
      <div class="form-group">
        <label for="login">Pseudo</label>
        <input type="text" name="login" class="form-control" id="login" placeholder="ex : BoulangeriePayet974" />
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="password">Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password" id="mdp" class="form-control" placeholder="***************" required />
        <div class="invalid-feedback">
          Entrez un mot de passe valide.
        </div>
      </div>
      <div class="form-group">
        <label for="password2">Confirmez votre Mot de Passe<span id="important">*</span></label>
        <input type="password" name="password2" id="mdp2" class="form-control" placeholder="***************" required />
        <div class="invalid-feedback">
          Entrez un mot de passe valide.
        </div>
      </div>
      <div class="form-group">
        <label for="linkedin">Lien vers votre page Linkedin</label>
        <input type="url" id="linkedin" name="linkedin" class="form-control" placeholder="ex :www.linkedin.com/in/payet-marc-198755421" />
      </div>
      <div class="form-group files">
        <!-- <label for="CV">Importez votre CV<span id="important">*</span></label>
          <div class="input-group">
            <div class="custom-file">
              <input
                type="file"
                name="CV"
                class="custom-file-input"
                id="inputGroupFile01"
                required
                aria-describedby="inputGroupFileAddon01"
              />
              <label class="custom-file-label" for="inputGroupFile01"
                >Importez votre CV...</label
              >
            </div>
            <div class="invalid-feedback">
              Importez un CV.
            </div>
          </div> -->
        <label>Importez votre CV<span id="important">*</span></label>
        <input type="file" class="form-control" required>
        <div class="invalid-feedback">
          Importez votre CV.
        </div>
      </div>
      <div class="custom-control custom-checkbox form-group">
        <input type="checkbox" class="custom-control-input" id="customCheck1" required />
        <label class="custom-control-label" for="customCheck1">J'accepte les conditions et la
          <a href="#" class="lien">Politique de Confidentialités</a> de
          Connectanou</label><span id="important">*</span>
        <div class="invalid-feedback">
          Veuillez cocher la case.
        </div>
      </div>
      <div class="g-recaptcha form-group" data-sitekey="6LeTmMAUAAAAADw7uH0DmeFBI9x0YeqhCZos-AFR"></div>
      <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdxmMAUAAAAAGaKb_PBUkAazJGtn_kBjNI1zViW"></script>
        <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {

            });
        });
  </script> -->
      <!-- Sign in button -->
      <button class="btn btn-info btn-block my-4 " type="submit" id="bouton">
        S'inscrire
      </button>
    </form>
  </div>
  @include('footer')
@endsection
@section('script')
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--  <script>
      var aujourdhui = new Date();
      document.getElementById("naissance").valueAsDate = aujourdhui;
    </script> -->
  <script src="js/script_ReaProjet.js"></script>
@endsection