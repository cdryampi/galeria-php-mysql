<?php
require "connexio.php";
session_start();
// Funcio per saber si l'usuari s'ha identificat.
function session(){
    $sessio = false;
    if (isset($_SESSION['usuari'])) {
        $sessio = true;
    }
    return $sessio;
}

// Funcio del menu NAV fem servir Bootstrap

function Capcelera(){
    $nav = "<header class=\"row\">
                <nav class=\"navbar navbar-expand-sm navbar-dark bg-warning fixed-top\">
                    <a href=\"#\" class=\"navbar-brand\"><img src=\"img/logo-lux.png\" id=\"lux\"/></a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menu\">
                        <span class=\"navbar-toggle-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"menu\">
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item active\">
                                <a href=\"#\" class=\"nav-link\">Inicio</a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Noticias</a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"#\" class=\"dropdown-item\">Últimas Noticias</>
                                    <a href=\"#\" class=\"dropdown-item\">Noticas Destacadas</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Nosotros</a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"#\" class=\"dropdown-item\">La empresa</a>
                                    <a href=\"#\" class=\"dropdown-item\">Trabaja con nostros</a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown\" >
                                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">Contacto</a>
                                <div class=\"dropdown-menu\">
                                    <a href=\"#\" class=\"dropdown-item\">¿Donde estamos?</a>
                                    <a href=\"#\" class=\"dropdown-item\">Servicio al cliente</a>
                                </div>
                            </li>
                        </ul>
                        </div>";
                        if(!session()){
                            $nav .="
                                    <form class=\"form-inline\">
                                        <input class=\"btn btn-danger btn-sm mr-2\" data-toggle=\"modal\" data-target=\"#login\" type=\"button\" value=\"Login\">
                                        <input class=\"btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#registro\" type=\"button\" value=\"Registro\">
                                    </form>
                                    
                                    </nav>
                                </header>";
                        }else{
                            $username= $_SESSION['usuari'];
                            $username= strtok($username,'@');
                            $nav .="<ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                              <a href=\"./admin/tancar.php\" class=\"nav-link\">Tancar Sessió</a>
                            </li>
                            <li class=\"nav-item\">
                              <a href=\"./admin/usuari.php\" class=\"nav-link\">".$username."</a>
                            </li>
                            </ul>
                            </nav>
                            </header>";
                        };
                            
    return $nav;
}

function Modal_Login(){
    if(!session()){
        $content = " <section class=\"modal\" id=\"login\">
        <div class=\"modal-dialog modal-dialog-centered\">
          <div class=\"modal-content\">
            <div class=\"modal-header bg-warning text-write\">
              <div class=\"modal-title\">
                Entrar en sección
              </div>
              <span data-dismiss=\"modal\">X</span>
              </div>
              <div class=\"modal-body\">
                <form  method=\"post\" action=\"./admin/validar_login.php\" role=\"form\" id=\"enviarPutoPost\">
                  <div class=\"form-group\">
                    <label class=\"col-label-sm control-label\">Email:</label>
                    <input class=\"form-control\" name=\"email\" type=\"email\" placeholder=\"Introduce tu email\" required/>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-label-sm control-label\">Contraseña:</label>
                    <input class=\"form-control\" name=\"pass\" type=\"password\" placeholder=\"Introduce tu contraseña\"/>
                  </div>
                </form>
              </div>
              <div class=\"modal-footer\">
                <div class=\"text-right\">
                  <input  type=\"submit\" value=\"Envia\" class=\"btn btn-warning\" onclick=\"form_submit()\" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>";
    }else{
        $content="";
    }
    return $content;
}
function Destroy(){
    session_destroy();
}


?>