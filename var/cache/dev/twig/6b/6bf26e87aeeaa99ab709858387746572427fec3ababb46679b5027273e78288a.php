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

/* faq.html.twig */
class __TwigTemplate_6010f0b80aee1da39bda146ea693adae1baf3f4a943981b9d417dae8fc3952e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) ? ("authenticated/base.html.twig") : ("base.html.twig")), "faq.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "faq.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/faq.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Foire aux Questions
        </div>
        <div class=\"card-back-msg\">
            <div class=\"category\">
                <div class=\"category-header\">
                    Un mode vacances est-il intégré ?
                </div>
                <div class=\"category-body\">
                    Le mode vacances ou plutôt absence est incorporé directement dans le fonctionnement du jeu. Ne pouvant recevoir que 2 attaques maximum par région sur une période de 24h, et ne remettant ce compteur à 0 que lors de sa première connexion journalière, tant que l'on ne se connecte pas, une fois les 2 attaques atteintes, personne ne pourra plus vous attaquer dans cette région. Ce mode se déclenche automatiquement dès que l'on a été attaqué 2 fois dans une région et que l'on ne se connecte plus sur le jeu. En cas d'absence, on n'accumule pas les points d'action pendant les jours où l'on ne se connecte pas sur le jeu.
                </div>
                <div class=\"category-header\">
                    A quoi servent les Points d'Action ?
                </div>
                <div class=\"category-body\">
                    Les Points d'Action permettent de faire toutes sortes d'action dans le jeu : exploration, braconnage, voyage, chasse aux trésors, guerre... 30 Points d'Action sont donnés par jour lors de sa première connexion.
                </div>
                <div class=\"category-header\">
                    Comment gagner de l'or ?
                </div>
                <div class=\"category-body\">
                    Il y a une multitude de façons pour gagner des pièces d'or. Comme le braconnage, la chasse aux trésors et le commerce. Il est aussi possible de voler un butin de guerre lorsque l'on attaque un autre joueur. Et pour finir, le contrôle de région par une Alliance permet à tous ses membres de toucher une rente quotidienne.
                </div>
                <div class=\"category-header\">
                    Comment est calculée la puissance ?
                </div>
                <div class=\"category-body\">
                    Le calcul de la puissance se base sur le niveau de vos navires et la fortune que vous avez amassée.
                </div>
                <div class=\"category-header\">
                    A quoi servent les instructions de Guerre ?
                </div>
                <div class=\"category-body\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"text-center font-weight-bold blue-text\">Ordres à l'Equipage</div>

                            <br><b>A l'Abordage !</b><br>
                            Il s'agit d'une attaque normale, équilibrée entre le tir aux canons et l'abordage du navire ennemi.

                            <br><br><b>Pas de Quartier !</b><br>
                            La priorité est donnée à l'abordage. Vous utilisez moins longtemps vos canons et votre puissance de tir est donc amoindrie. En revanche, vos navires foncent droit sur l'ennemi pour l'aborder, et gagnez donc en conséquence un bonus pour la phase d'abordage. Une bonne tactique pour le vol de butin et la capture de navire à condition d'avoir bien armé son équipage.

                            <br><br><b>Feu à Volonté !</b><br>
                            La priorité est donnée aux canons. Vos navires se concentrent sur l'utilisation des canons, en augmentant ainsi la puissance et la précision de vos tirs. Votre abordage se limite au stricte minimum, et perdez donc en efficacité dans cette phase là. Avec un vaisseau lourdement armé et cette stratégie d'attaque, vous coulerez un bon nombre de navires ennemis.
                        </div>
                        <div class=\"col-6\">
                            <div class=\"text-center font-weight-bold red-text\">Consignes aux Canonniers</div>

                            <br><b>Tir Plein Bois</b><br>
                            Le tir en plein bois, à hauteur de batterie, cherche la destruction de l'artillerie, du matériel et des canonniers ennemis. Redoutablement meurtrier pour l'équipage à bord, et capable de détruire un navire.

                            <br><br><b>Tir à Démâter</b><br>
                            Le tir à démâter vise la destruction de la mâture et des gréements du vaisseau adverse pour le mettre en difficulté ou dans l'impossibilité de manœuvrer. Cette tactique est privilégiée pour immobiliser le navire ennemi et éviter qu'il ne prenne la fuite, mais provoquant que des pertes humaines légères.

                            <br><br><b>Tir à Mitraille</b><br>
                            Le tir à mitraille consiste à tirer des paquets de petits morceaux de fer d'origines diverses, pour décimer les équipages adverses. Cette tactique cause moins de dégâts au navire ennemi, mais ses pertes humaines sont considérables.
                        </div>
                    </div>
                </div>
                <div class=\"category-header\">Comment sont répartis les territoires ?</div>
                <div class=\"category-body\">
                    Chaque Alliance a la possibilité de contrôler une ou plusieurs régions d'Ilshenar. Ceci afin de gagner en réputation et de toucher sa part quotidienne sur la taxe commerciale totale du jour. Il suffit de combattre d'autres pirates dans une région pour marquer des points, et les visualiser dans l'onglet Territoire de la page Alliance. Le calcul pour l'attribution des régions aux alliances dominantes et la distribution d'or se fait tous les jours à minuit.
                </div>
                <div class=\"category-header\">Comment renommer un navire ?</div>
                <div class=\"category-body\">
                    Pour renommer un navire, il suffit de se rendre sur la page Navire et de cliquer sur l'icône de plume. Une popin apparaîtra alors.
                </div>
                <div class=\"category-header\">Comment capturer un navire ?</div>
                <div class=\"category-body\">
                    Pour augmenter la taille de sa flotte, il suffit d'attaquer les pêcheurs, les marchands et la marine royale et espérer réussir à leur capturer un navire. Il est possible d'avoir jusqu'à 10 navires au maximum. Mais rien n'interdit de jouer avec moins de navires pour économiser ses points d'action...
                </div>
                <div class=\"category-header\">Je n'arrive plus à déplacer mon navire, pourquoi ?</div>
                <div class=\"category-body\">
                    Si vous ne pouvez plus déplacer votre navire, c'est sans doute car vous n'avez plus un seul matelot à bord. Il faudra alors en recruter au moins un à l'aide de la page Equipage. Si ce n'est pas ça, c'est que vous n'avez plus de points d'action à utiliser.
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 9,  85 => 8,  73 => 5,  68 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends app.user ? 'authenticated/base.html.twig' : 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/faq.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"card no-min-height\">
        <div class=\"card-header\">
            Foire aux Questions
        </div>
        <div class=\"card-back-msg\">
            <div class=\"category\">
                <div class=\"category-header\">
                    Un mode vacances est-il intégré ?
                </div>
                <div class=\"category-body\">
                    Le mode vacances ou plutôt absence est incorporé directement dans le fonctionnement du jeu. Ne pouvant recevoir que 2 attaques maximum par région sur une période de 24h, et ne remettant ce compteur à 0 que lors de sa première connexion journalière, tant que l'on ne se connecte pas, une fois les 2 attaques atteintes, personne ne pourra plus vous attaquer dans cette région. Ce mode se déclenche automatiquement dès que l'on a été attaqué 2 fois dans une région et que l'on ne se connecte plus sur le jeu. En cas d'absence, on n'accumule pas les points d'action pendant les jours où l'on ne se connecte pas sur le jeu.
                </div>
                <div class=\"category-header\">
                    A quoi servent les Points d'Action ?
                </div>
                <div class=\"category-body\">
                    Les Points d'Action permettent de faire toutes sortes d'action dans le jeu : exploration, braconnage, voyage, chasse aux trésors, guerre... 30 Points d'Action sont donnés par jour lors de sa première connexion.
                </div>
                <div class=\"category-header\">
                    Comment gagner de l'or ?
                </div>
                <div class=\"category-body\">
                    Il y a une multitude de façons pour gagner des pièces d'or. Comme le braconnage, la chasse aux trésors et le commerce. Il est aussi possible de voler un butin de guerre lorsque l'on attaque un autre joueur. Et pour finir, le contrôle de région par une Alliance permet à tous ses membres de toucher une rente quotidienne.
                </div>
                <div class=\"category-header\">
                    Comment est calculée la puissance ?
                </div>
                <div class=\"category-body\">
                    Le calcul de la puissance se base sur le niveau de vos navires et la fortune que vous avez amassée.
                </div>
                <div class=\"category-header\">
                    A quoi servent les instructions de Guerre ?
                </div>
                <div class=\"category-body\">
                    <div class=\"row\">
                        <div class=\"col-6\">
                            <div class=\"text-center font-weight-bold blue-text\">Ordres à l'Equipage</div>

                            <br><b>A l'Abordage !</b><br>
                            Il s'agit d'une attaque normale, équilibrée entre le tir aux canons et l'abordage du navire ennemi.

                            <br><br><b>Pas de Quartier !</b><br>
                            La priorité est donnée à l'abordage. Vous utilisez moins longtemps vos canons et votre puissance de tir est donc amoindrie. En revanche, vos navires foncent droit sur l'ennemi pour l'aborder, et gagnez donc en conséquence un bonus pour la phase d'abordage. Une bonne tactique pour le vol de butin et la capture de navire à condition d'avoir bien armé son équipage.

                            <br><br><b>Feu à Volonté !</b><br>
                            La priorité est donnée aux canons. Vos navires se concentrent sur l'utilisation des canons, en augmentant ainsi la puissance et la précision de vos tirs. Votre abordage se limite au stricte minimum, et perdez donc en efficacité dans cette phase là. Avec un vaisseau lourdement armé et cette stratégie d'attaque, vous coulerez un bon nombre de navires ennemis.
                        </div>
                        <div class=\"col-6\">
                            <div class=\"text-center font-weight-bold red-text\">Consignes aux Canonniers</div>

                            <br><b>Tir Plein Bois</b><br>
                            Le tir en plein bois, à hauteur de batterie, cherche la destruction de l'artillerie, du matériel et des canonniers ennemis. Redoutablement meurtrier pour l'équipage à bord, et capable de détruire un navire.

                            <br><br><b>Tir à Démâter</b><br>
                            Le tir à démâter vise la destruction de la mâture et des gréements du vaisseau adverse pour le mettre en difficulté ou dans l'impossibilité de manœuvrer. Cette tactique est privilégiée pour immobiliser le navire ennemi et éviter qu'il ne prenne la fuite, mais provoquant que des pertes humaines légères.

                            <br><br><b>Tir à Mitraille</b><br>
                            Le tir à mitraille consiste à tirer des paquets de petits morceaux de fer d'origines diverses, pour décimer les équipages adverses. Cette tactique cause moins de dégâts au navire ennemi, mais ses pertes humaines sont considérables.
                        </div>
                    </div>
                </div>
                <div class=\"category-header\">Comment sont répartis les territoires ?</div>
                <div class=\"category-body\">
                    Chaque Alliance a la possibilité de contrôler une ou plusieurs régions d'Ilshenar. Ceci afin de gagner en réputation et de toucher sa part quotidienne sur la taxe commerciale totale du jour. Il suffit de combattre d'autres pirates dans une région pour marquer des points, et les visualiser dans l'onglet Territoire de la page Alliance. Le calcul pour l'attribution des régions aux alliances dominantes et la distribution d'or se fait tous les jours à minuit.
                </div>
                <div class=\"category-header\">Comment renommer un navire ?</div>
                <div class=\"category-body\">
                    Pour renommer un navire, il suffit de se rendre sur la page Navire et de cliquer sur l'icône de plume. Une popin apparaîtra alors.
                </div>
                <div class=\"category-header\">Comment capturer un navire ?</div>
                <div class=\"category-body\">
                    Pour augmenter la taille de sa flotte, il suffit d'attaquer les pêcheurs, les marchands et la marine royale et espérer réussir à leur capturer un navire. Il est possible d'avoir jusqu'à 10 navires au maximum. Mais rien n'interdit de jouer avec moins de navires pour économiser ses points d'action...
                </div>
                <div class=\"category-header\">Je n'arrive plus à déplacer mon navire, pourquoi ?</div>
                <div class=\"category-body\">
                    Si vous ne pouvez plus déplacer votre navire, c'est sans doute car vous n'avez plus un seul matelot à bord. Il faudra alors en recruter au moins un à l'aide de la page Equipage. Si ce n'est pas ça, c'est que vous n'avez plus de points d'action à utiliser.
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "faq.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pirate_des_trois_oceans\\templates\\faq.html.twig");
    }
}
