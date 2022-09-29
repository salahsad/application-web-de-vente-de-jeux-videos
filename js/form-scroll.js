$(document).ready(function() {
    var p = '<div class="sidenav"><form method="post" action="#"><div class="row"><div class="col-md-12 identite"><div class="row"><div class="col-md-8 col-sm-8 col-xs-8"><p>Réserver en magasin</p></div><div class="col-md-4 col-sm-4 col-xs-4"><button type="stayhere" id="fermer"><i class="fas fa-times"></i></button></div></div></div><div class="col-md-12 identite"><input type="text" id="nom" name="nom" class="form-control btn-lg" placeholder="Nom*"></div><div class="col-md-12 identite"><input type="text" id="prenom" name="prenom" class="form-control btn-lg" placeholder="Prénom*"></div><div class="col-md-12 identite"><input type="mail" id="mail" name="mail" class="form-control btn-lg" placeholder="Adresse email*"></div><div class="col-md-12 identite"><input type="tel" id="tel" name="tel" class="form-control btn-lg" placeholder="Téléphone portable*"></div><div class="col-md-12 identite"><label for="choix">Choix du magasin</label><input type="text" id="choix" name="choix" class="form-control btn-lg" placeholder="ville*"></div><div class="col-md-12 identite"><button type="submit" class="btn btn-primary btn-lg" id="rech-btn">Rechercher</button></div></form></div>'
    $(".res-btn").click(function() {
        $("#form-bot").html(p)
    });
    $('#fermer').click(function() {
        $("#form-bot").html("<p>rien</p>");

    })
});