<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* authenticated/crew.html.twig */
class __TwigTemplate_852c38ded389baaa4b243c540615df6e3faeac21bd658bc2a5de5d982b31d059 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "authenticated/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/crew.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "authenticated/crew.html.twig"));

        $this->parent = $this->loadTemplate("authenticated/base.html.twig", "authenticated/crew.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 7
                if (0 === twig_compare($context["label"], "success")) {
                    echo "<span class=\"fas fa-check\"></span>";
                } elseif (0 === twig_compare($context["label"], "danger")) {
                    echo "<span class=\"fas fa-times\"></span>";
                }
                echo " ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    <div class=\"card no-min-height mb-3\">
        <div class=\"card-header\">
            Recrutement
        </div>
        <div class=\"card-body card-back1\">
            <div class=\"row\">
                <div class=\"top-card-body col-12\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/coin.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"gold\"> <b>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "gold", [], "any", false, false, false, 20), 0, ".", " "), "html", null, true);
        echo "</b> Pièces d'or
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "ships", [], "any", false, false, false, 21), 'widget');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "save", [], "any", false, false, false, 22), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown\">
        <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Matelot</strong> <span class=\"float-right\" id=\"seaman\">Déjà à bord <span id=\"seaman-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 29, $this->source); })())), "seaman", [], "array", false, false, false, 29), "actual", [], "array", false, false, false, 29), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 29, $this->source); })())), "seaman", [], "array", false, false, false, 29), "max", [], "array", false, false, false, 29), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "seaman", [], "any", false, false, false, 29), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/8.jpg"), "html", null, true);
        echo "\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de déplacer un Navire et participe aux abordages.</b></p>

            <p class=\"mini3\">
                Recrues affectées à de nombreuses tâches telles que l'entretien des canons, le nettoyage de la cabine du capitaine ou toutes sortes de besognes plus ou moins ingrates sur le navire. Lors des combats, ce sont les premiers sur le pont prêts à l'abordage. Ces pirates sont pour la plupart de nature robuste, disposant d'un physique adapté à la violence de leurs activités et des conditions de vie à bord. Cette vie intrépide ne leur laisse malheureusement que rarement le temps de faire de vieux os. Marins plus ou moins expérimentés, ils sont totalement indispensables sur un navire.
                <span class=\"float-right-bottom\">100 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Explorateur</strong> <span class=\"float-right\" id=\"explorer\">Déjà à bord <span id=\"explorer-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 44, $this->source); })())), "explorer", [], "array", false, false, false, 44), "actual", [], "array", false, false, false, 44), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 44, $this->source); })())), "explorer", [], "array", false, false, false, 44), "max", [], "array", false, false, false, 44), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "explorer", [], "any", false, false, false, 44), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/11.jpg"), "html", null, true);
        echo "\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de braconner, faire de l'exploration et participer aux abordages.</b></p>

            <p class=\"mini3\">
                C'est un véritable aventurier qui n'a peur de rien. Il est principalement envoyé à terre lors des nombreuses escales en territoire inconnu. Il explore les environs à la recherche de nourriture et d'eau douce afin de réapprovisionner les cales du navire. Il excelle dans ses activités de braconnage et permettra donc d'accumuler de nombreux trophées de chasse au cours de vos voyages. Mais avant tout, ce baroudeur est un expert dans la chasse aux trésors. C'est grâce à lui et à ses compétences que vous allez découvrir des richesses inimaginables dissimulées à travers le monde d'Ilshenar.
                <span class=\"float-right-bottom\">200 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Canonnier</strong> <span class=\"float-right\" id=\"gunner\">Déjà à bord <span id=\"gunner-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 59, $this->source); })())), "gunner", [], "array", false, false, false, 59), "actual", [], "array", false, false, false, 59), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 59, $this->source); })())), "gunner", [], "array", false, false, false, 59), "max", [], "array", false, false, false, 59), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "gunner", [], "any", false, false, false, 59), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/9.jpg"), "html", null, true);
        echo "\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet d'utiliser les canons à bord du navire.</b></p>

            <p class=\"mini3\">
                Il commande l'artillerie du bord. Durant les engagements de combats, il dirige les équipes de canonniers afin de viser juste et de synchroniser les tirs d'une bordée de canons. Le nombre de canons à bord d'un navire, mais surtout l'efficacité avec laquelle ils sont utilisés, est très souvent décisif dans l'issue d'un affrontement en mer. Ceci le rend donc indispensable durant les batailles et il garantit une puissance de feu destructrice face à l'ennemi. Bien entendu, afin de mettre à profit ses compétences, il devra disposer d'une pièce d'artillerie. Un canonnier permettant de faire fonctionner un seul canon à la fois.
                <span class=\"float-right-bottom\">500 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Cuisinier</strong> <span class=\"float-right\" id=\"cook\">Déjà à bord <span id=\"cook-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 74, $this->source); })())), "carpenter", [], "array", false, false, false, 74), "actual", [], "array", false, false, false, 74), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 74, $this->source); })())), "carpenter", [], "array", false, false, false, 74), "max", [], "array", false, false, false, 74), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "cook", [], "any", false, false, false, 74), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/5.jpg"), "html", null, true);
        echo "\" alt=\"cuisinier\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de nourrir et divertir l'Equipage tout en remontant le moral du bord.</b></p>

            <p class=\"mini3\">
                Le cuisinier est souvent un matelot qui, après une blessure au combat, ne peut plus servir à grand chose d'autre sur le navire. On le nomme cuisinier mais rien ne garantit qu'il ait la moindre compétence en matière de chaudron. Son rôle est évident : nourrir l'équipage mais aussi leur donner du coeur à l'ouvrage en accomodant au mieux la cambuse. Viandes boucanées, écrevisses, lézards, tortues de mer et bouteilles de rhum seront à la carte ! Il permet de remonter le moral de l'équipage en cas de besoin et donc d'influer sur leur ardeur au travail et au combat.
                <span class=\"float-right-bottom\">1 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Charpentier</strong> <span class=\"float-right\" id=\"carpenter\">Déjà à bord <span id=\"carpenter-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 89, $this->source); })())), "cook", [], "array", false, false, false, 89), "actual", [], "array", false, false, false, 89), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 89, $this->source); })())), "cook", [], "array", false, false, false, 89), "max", [], "array", false, false, false, 89), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "carpenter", [], "any", false, false, false, 89), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/12.jpg"), "html", null, true);
        echo "\" alt=\"cuisinier\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de réparer le navire et de l'améliorer.</b></p>

            <p class=\"mini3\">
                Sans lui, il vous sera impossible de vous déplacer. En effet, le charpentier s'occupe d'entretien et d'améliorer la structure de votre navire fait de bois. Grâce à ses hautes compétences, vous pourrez réparer votre navire après un dur combat en mer et, ainsi, repartir de plus belle à la conquête d'Ilshenar. De plus, son savoir faire vous permettra également d'améliorer votre navire ce qui vous rendra plus fort lors des batailles en mer.
                <span class=\"float-right-bottom\">2 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/arsenal.png"), "html", null, true);
        echo "\" class=\"logo-big\" alt=\"arsenal\"> <strong>Chirgurgien</strong> <span class=\"float-right\" id=\"surgeon\">Déjà à bord <span id=\"surgeon-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 104, $this->source); })())), "surgeon", [], "array", false, false, false, 104), "actual", [], "array", false, false, false, 104), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["crewData"]) || array_key_exists("crewData", $context) ? $context["crewData"] : (function () { throw new RuntimeError('Variable "crewData" does not exist.', 104, $this->source); })())), "surgeon", [], "array", false, false, false, 104), "max", [], "array", false, false, false, 104), "html", null, true);
        echo "</span> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "surgeon", [], "any", false, false, false, 104), 'widget');
        echo "</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/avatars/4.jpg"), "html", null, true);
        echo "\" alt=\"chirurgien\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de soigner les membres de l'équipage.</b></p>

            <p class=\"mini3\">
                Comme son nom le laisse suggérer, le chirurgien va vous permettre de soigner les membres de l'équipage à bord. En d'autres termes, lorsqu'une bataille aura eu lieu, il va pouvoir soigner quelques membres de l'équipage, leur épargnant une mort douloureuse et vous permettant d'économiser quelques hommes. Grâce à sa médecine traditionnelle, cette recrue va donc vous permettre, à termes, de faire des économies en recrutement, bien qu'il soit assez cher à enrôler..
                <span class=\"float-right-bottom\">5 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        echo "

    ";
        // line 120
        $this->loadTemplate("authenticated/script/recruit.html.twig", "authenticated/crew.html.twig", 120)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "authenticated/crew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 120,  299 => 118,  285 => 107,  273 => 104,  258 => 92,  246 => 89,  231 => 77,  219 => 74,  204 => 62,  192 => 59,  177 => 47,  165 => 44,  150 => 32,  138 => 29,  128 => 22,  124 => 21,  118 => 20,  114 => 19,  104 => 11,  98 => 10,  83 => 7,  78 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'authenticated/base.html.twig' %}

{% block body %}
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                {% if label == 'success' %}<span class=\"fas fa-check\"></span>{% elseif label == 'danger' %}<span class=\"fas fa-times\"></span>{% endif %} {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

    <div class=\"card no-min-height mb-3\">
        <div class=\"card-header\">
            Recrutement
        </div>
        <div class=\"card-body card-back1\">
            <div class=\"row\">
                <div class=\"top-card-body col-12\">
                    {{ form_start(form) }}
                        <img src=\"{{ asset('img/icons/coin.png') }}\" class=\"logo\" alt=\"gold\"> <b>{{ app.user.gold|number_format(0, '.', ' ') }}</b> Pièces d'or
                        {{ form_widget(form.ships) }}
                        {{ form_widget(form.save) }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Matelot</strong> <span class=\"float-right\" id=\"seaman\">Déjà à bord <span id=\"seaman-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['seaman']['actual'] }} / {{ crewData|first['seaman']['max'] }}</span> {{ form_widget(form.seaman) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/8.jpg') }}\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de déplacer un Navire et participe aux abordages.</b></p>

            <p class=\"mini3\">
                Recrues affectées à de nombreuses tâches telles que l'entretien des canons, le nettoyage de la cabine du capitaine ou toutes sortes de besognes plus ou moins ingrates sur le navire. Lors des combats, ce sont les premiers sur le pont prêts à l'abordage. Ces pirates sont pour la plupart de nature robuste, disposant d'un physique adapté à la violence de leurs activités et des conditions de vie à bord. Cette vie intrépide ne leur laisse malheureusement que rarement le temps de faire de vieux os. Marins plus ou moins expérimentés, ils sont totalement indispensables sur un navire.
                <span class=\"float-right-bottom\">100 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Explorateur</strong> <span class=\"float-right\" id=\"explorer\">Déjà à bord <span id=\"explorer-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['explorer']['actual'] }} / {{ crewData|first['explorer']['max'] }}</span> {{ form_widget(form.explorer) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/11.jpg') }}\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de braconner, faire de l'exploration et participer aux abordages.</b></p>

            <p class=\"mini3\">
                C'est un véritable aventurier qui n'a peur de rien. Il est principalement envoyé à terre lors des nombreuses escales en territoire inconnu. Il explore les environs à la recherche de nourriture et d'eau douce afin de réapprovisionner les cales du navire. Il excelle dans ses activités de braconnage et permettra donc d'accumuler de nombreux trophées de chasse au cours de vos voyages. Mais avant tout, ce baroudeur est un expert dans la chasse aux trésors. C'est grâce à lui et à ses compétences que vous allez découvrir des richesses inimaginables dissimulées à travers le monde d'Ilshenar.
                <span class=\"float-right-bottom\">200 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Canonnier</strong> <span class=\"float-right\" id=\"gunner\">Déjà à bord <span id=\"gunner-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['gunner']['actual'] }} / {{ crewData|first['gunner']['max'] }}</span> {{ form_widget(form.gunner) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/9.jpg') }}\" alt=\"matelot\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet d'utiliser les canons à bord du navire.</b></p>

            <p class=\"mini3\">
                Il commande l'artillerie du bord. Durant les engagements de combats, il dirige les équipes de canonniers afin de viser juste et de synchroniser les tirs d'une bordée de canons. Le nombre de canons à bord d'un navire, mais surtout l'efficacité avec laquelle ils sont utilisés, est très souvent décisif dans l'issue d'un affrontement en mer. Ceci le rend donc indispensable durant les batailles et il garantit une puissance de feu destructrice face à l'ennemi. Bien entendu, afin de mettre à profit ses compétences, il devra disposer d'une pièce d'artillerie. Un canonnier permettant de faire fonctionner un seul canon à la fois.
                <span class=\"float-right-bottom\">500 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Cuisinier</strong> <span class=\"float-right\" id=\"cook\">Déjà à bord <span id=\"cook-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['carpenter']['actual'] }} / {{ crewData|first['carpenter']['max'] }}</span> {{ form_widget(form.cook) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/5.jpg') }}\" alt=\"cuisinier\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de nourrir et divertir l'Equipage tout en remontant le moral du bord.</b></p>

            <p class=\"mini3\">
                Le cuisinier est souvent un matelot qui, après une blessure au combat, ne peut plus servir à grand chose d'autre sur le navire. On le nomme cuisinier mais rien ne garantit qu'il ait la moindre compétence en matière de chaudron. Son rôle est évident : nourrir l'équipage mais aussi leur donner du coeur à l'ouvrage en accomodant au mieux la cambuse. Viandes boucanées, écrevisses, lézards, tortues de mer et bouteilles de rhum seront à la carte ! Il permet de remonter le moral de l'équipage en cas de besoin et donc d'influer sur leur ardeur au travail et au combat.
                <span class=\"float-right-bottom\">1 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Charpentier</strong> <span class=\"float-right\" id=\"carpenter\">Déjà à bord <span id=\"carpenter-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['cook']['actual'] }} / {{ crewData|first['cook']['max'] }}</span> {{ form_widget(form.carpenter) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/12.jpg') }}\" alt=\"cuisinier\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de réparer le navire et de l'améliorer.</b></p>

            <p class=\"mini3\">
                Sans lui, il vous sera impossible de vous déplacer. En effet, le charpentier s'occupe d'entretien et d'améliorer la structure de votre navire fait de bois. Grâce à ses hautes compétences, vous pourrez réparer votre navire après un dur combat en mer et, ainsi, repartir de plus belle à la conquête d'Ilshenar. De plus, son savoir faire vous permettra également d'améliorer votre navire ce qui vous rendra plus fort lors des batailles en mer.
                <span class=\"float-right-bottom\">2 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    <div class=\"top-card-body col-12 border-bottom-brown mt-3\">
        <img src=\"{{ asset('img/icons/arsenal.png') }}\" class=\"logo-big\" alt=\"arsenal\"> <strong>Chirgurgien</strong> <span class=\"float-right\" id=\"surgeon\">Déjà à bord <span id=\"surgeon-crew\" class=\"blue-text font-weight-bold ml-2 mr-2\">{{ crewData|first['surgeon']['actual'] }} / {{ crewData|first['surgeon']['max'] }}</span> {{ form_widget(form.surgeon) }}</span>
    </div>
    <div class=\"d-flex\">
        <img src=\"{{ asset('img/avatars/4.jpg') }}\" alt=\"chirurgien\" class=\"ship-img\">
        <div class=\"crew-bg p-1\">
            <p class=\"middle\"><b>Permet de soigner les membres de l'équipage.</b></p>

            <p class=\"mini3\">
                Comme son nom le laisse suggérer, le chirurgien va vous permettre de soigner les membres de l'équipage à bord. En d'autres termes, lorsqu'une bataille aura eu lieu, il va pouvoir soigner quelques membres de l'équipage, leur épargnant une mort douloureuse et vous permettant d'économiser quelques hommes. Grâce à sa médecine traditionnelle, cette recrue va donc vous permettre, à termes, de faire des économies en recrutement, bien qu'il soit assez cher à enrôler..
                <span class=\"float-right-bottom\">5 000 Pièces d'or</span>
            </p>
        </div>
    </div>

    {{ form_end(form) }}

    {% include 'authenticated/script/recruit.html.twig' %}
{% endblock %}
", "authenticated/crew.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\authenticated\\crew.html.twig");
    }
}
