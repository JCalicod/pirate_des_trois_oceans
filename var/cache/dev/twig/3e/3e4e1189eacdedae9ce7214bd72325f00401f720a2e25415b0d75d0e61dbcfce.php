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

/* rules.html.twig */
class __TwigTemplate_67b4bcb07e5fb4533d56a124b0c713a0a9be6ab00f33e5deb0299c1cb32f85fd extends Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) ? ("authenticated/base.html.twig") : ("base.html.twig")), "rules.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rules.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rules.html.twig"));

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
            Règles du Jeu
        </div>
        <div class=\"card-back-msg\">
            <div class=\"category\">
                <div class=\"category-header\">
                    Bienvenue sur Pirate des Trois Océans
                </div>
                <div class=\"category-body\">
                    Bienvenue dans les mystérieuses contrées d'Ilshenar. Pirates des trois océans est un jeu en ligne gratuit simple et très immersif, se basant sur le fascinant monde de la piraterie. Vous évoluerez dans ce monde à votre guise, en effectuant les actions quotidiennes de votre choix. Abordages sanglants, combats en mer, braconnages, complots en tout genre, chasses aux trésors et soirées mouvementées à la taverne : voilà ce qui vous attend !
                    <br><br>
                    La page d'Accueil fournit les informations les plus importantes concernant le jeu. Les Points d'Action [ PA ], notamment, qui permettent de faire toutes sortes d'action dans le jeu. 30 PA sont donnés par jour lors de sa première connexion. Ces points sont cumulables. Les points non utilisés un jour seront encore valides le jour suivant et ainsi de suite. Néanmoins, tous ces points ne sont crédités qu'à partir du moment où vous vous connectez sur le jeu.
                </div>
                <div class=\"category-header\">
                    L'Exploration
                </div>
                <div class=\"category-body\">
                    Pour trouver le trésor, il suffit d'explorer les régions afin de découvrir les indices qui vous permettront de résoudre l'énigme finale. Les indices peuvent indiquer des lettres (maximum 12 indices de ce genre) ou des chiffres (maximum 2 indices de ce genre). Le but étant de trouver le mot mystère en remettant dans l'ordre les lettres. Un des chiffres correspond au nombre total de lettres composant le mot mystère et le second indique la région où se trouve le trésor.
                    <br><br>
                    Le mot mystère à trouver, par exemple, est « CANON ». Le chiffre « 5 » indique le nombre de lettres composant ce mot, mais il nous manque encore un chiffre pour savoir dans quelle région le trésor se trouve ! La chasse aux trésors permet de gagner des pièces d'or, mais surtout des objets magiques avec des effets plus ou moins intéressants. Ses effets débutent de son activation jusqu'à la fin de sa période d'activité, en cliquant sur l'icône brun qui devient alors vert.
                </div>
                <div class=\"category-header\">
                    Le Braconnage
                </div>
                <div class=\"category-body\">
                    Collectionnez jusqu'à 60 trophées de chasse différents au cours de vos voyages. Pour chasser et capturer la faune d'Ilshenar, il suffit d'envoyer vos explorateurs à terre faire du braconnage dans les différentes régions. De belles récompenses en pièces magiques vous attendent, mais prenez garde aux mauvaises rencontres... La chasse vous permet également de collecter des ressources, comme de la nourriture, du cuir et des pièces d'or.
                </div>
                <div class=\"category-header\">
                    Les Navires
                </div>
                <div class=\"category-body\">
                    La page Navires vous donne un état des lieux précis de votre flotte et de votre repaire, tout en permettant de les gérer. Chaque Navire a son propre niveau, qu'il est possible de monter à force de jouer. La barre verte symbolise l'expérience du navire, et à chaque fois qu'elle atteint son maximum, le navire monte d'un niveau. Le navire gagne de l'expérience en voyageant, en combattant et lorsque vous l'améliorez par vous-même avec du bois, du cuir, des pièces d'or et un charpentier.
                    <br><br>
                    Vous pouvez transporter dans chaque navire un certain nombre d'équipage et de marchandises en fonction de son niveau. La barre rouge indique l'état de votre bateau, une fois à zéro, le navire est coulé. Il est possible de réparer le navire à tout moment avec du bois, du cuir, des pièces d'or et un charpentier via cette page. La barre orange indique le moral de l'équipage à bord du navire, qui influe sur son efficacité au combat. Vous pouvez monter le moral de vos hommes grâce à de la nourriture, de l'alcool, des pièces d'or et un cuisinier.
                </div>
                <div class=\"category-header\">
                    L'Equipage
                </div>
                <div class=\"category-body\">
                    La page Equipage vous permet de recruter les membres d'équipages de vos navires pour quelques pièces d'or. Il y a 6 types de personnes différentes à recruter pour que tout se passe bien à bord d'un navire. Le matelot permet de déplacer le navire et participe aux abordages. Sans au moins un matelot à bord d'un navire, impossible de lui faire lever l'ancre ! L'explorateur permet de braconner et d'explorer les régions. C'est lui que l'on envoie d'habitude à terre lors des escales, mais il participera aussi aux abordages en mer.
                    <br><br>
                    Le canonnier permet d'utiliser les canons à bord du navire, à raison d'un canonnier par canon. Exemple, si vous avez 20 canons et 8 canonniers sur le bateau, seulement 8 canons seront utilisés. Grâce au cuisinier, vous pourrez nourrir et divertir l'équipage avec de la nourriture et de l'alcool pour lui remonter le moral. Le Charpentier vous permet de réparer et d'améliorer vos navires avec du bois, du cuir et des pièces d'or. Et pour finir, le chirurgien permet de soigner l'équipage lors des combats et de sauver ainsi des vies.
                </div>
                <div class=\"category-header\">
                    La Guerre
                </div>
                <div class=\"category-body\">
                    Le système de guerre permet de faire s'affronter deux flottes. Le repaire n'entre en compte que pour le défenseur. La bataille se passe en deux temps : échanges de coups de canon et abordages. Pour chacune des deux étapes il est possible de donner des ordres précis avant l'attaque. Un navire en mauvaise posture peut réussir à prendre la fuite, à moins qu'il n'ait subi un tir à démâter, brisant son mat et déchirant ses voiles. A la fin de l'affrontement, un rapport de bataille complet est disponible, indiquant les pertes, le butin de guerre, etc...
                    <br><br>
                    Il est possible d'attaquer les pêcheurs, les marchands et la marine royale chaque jour dans toutes les régions. Il est même possible de leur capturer des navires pour agrandir sa propre flotte. On ne peut recevoir que deux attaques par période de 24h dans chaque région, et d'un joueur différent. On ne peut attaquer (et recevoir une attaque) qu'un joueur ayant entre la moitié (50%) et le double (200%) de sa puissance. Une immunité de 3 jours pour les débutants permet de les laisser découvrir tranquillement le jeu.
                </div>
                <div class=\"category-header\">
                    Le Commerce
                </div>
                <div class=\"category-body\">
                    L'achat et la vente de marchandises se fait uniquement via le repaire et non par les navires directement. Pour vendre, il faut donc décharger la cargaison à terre, dans le repaire. Et pour les marchandises achetées, il faut les charger à bord du navire souhaité pour pouvoir les utiliser. Pour transférer les membres d'équipage et les marchandises entre navires et repaire, il suffit de cliquer sur le lien Transfert de marchandise, d'Equipage ou de Pièces d'or présent sur la page Navire.
                    <br><br>
                    Sur la page Commerce, il est possible de tout vendre et d'acheter aux marchands. Une taxe commerciale de 10% s'ajoute aux prix de total de la vente pour l'acheteur, qui sera distribuée chaque jour aux alliances contrôlant les régions d'Ilshenar. Le taux du marché varie chaque jour entre 50% et 100%, rendant l'achat ou la vente de marchandise plus ou moins intéressant. Une astuce consiste à acheter à un taux de 50% des bijoux, par exemple, puis à les revendre lorsque le taux est à 100% pour doubler son capital de départ. La caverne aux trésors permet de vendre et d'acheter les objets magiques obtenus grâce à la chasse aux trésors.
                </div>
                <div class=\"category-header\">
                    Les Alliances
                </div>
                <div class=\"category-body\">
                    Il est possible de rejoindre une Alliance ou de fonder la sienne à l'aide de la page Alliance. En plus de multiplier son plaisir de jeu et de se faire des amis pirates, on bénéficiera sans doute de précieux conseils et d'une aide financière.
                    <br><br>
                    Le contrôle d'une ou plusieurs régions par une alliance, permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Ile aux Forbans et 4% pour les autres régions conquises. A la fin de chaque journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire. En contrôlant des régions, l'alliance gagnera également des points de réputation.
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
        return "rules.html.twig";
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
            Règles du Jeu
        </div>
        <div class=\"card-back-msg\">
            <div class=\"category\">
                <div class=\"category-header\">
                    Bienvenue sur Pirate des Trois Océans
                </div>
                <div class=\"category-body\">
                    Bienvenue dans les mystérieuses contrées d'Ilshenar. Pirates des trois océans est un jeu en ligne gratuit simple et très immersif, se basant sur le fascinant monde de la piraterie. Vous évoluerez dans ce monde à votre guise, en effectuant les actions quotidiennes de votre choix. Abordages sanglants, combats en mer, braconnages, complots en tout genre, chasses aux trésors et soirées mouvementées à la taverne : voilà ce qui vous attend !
                    <br><br>
                    La page d'Accueil fournit les informations les plus importantes concernant le jeu. Les Points d'Action [ PA ], notamment, qui permettent de faire toutes sortes d'action dans le jeu. 30 PA sont donnés par jour lors de sa première connexion. Ces points sont cumulables. Les points non utilisés un jour seront encore valides le jour suivant et ainsi de suite. Néanmoins, tous ces points ne sont crédités qu'à partir du moment où vous vous connectez sur le jeu.
                </div>
                <div class=\"category-header\">
                    L'Exploration
                </div>
                <div class=\"category-body\">
                    Pour trouver le trésor, il suffit d'explorer les régions afin de découvrir les indices qui vous permettront de résoudre l'énigme finale. Les indices peuvent indiquer des lettres (maximum 12 indices de ce genre) ou des chiffres (maximum 2 indices de ce genre). Le but étant de trouver le mot mystère en remettant dans l'ordre les lettres. Un des chiffres correspond au nombre total de lettres composant le mot mystère et le second indique la région où se trouve le trésor.
                    <br><br>
                    Le mot mystère à trouver, par exemple, est « CANON ». Le chiffre « 5 » indique le nombre de lettres composant ce mot, mais il nous manque encore un chiffre pour savoir dans quelle région le trésor se trouve ! La chasse aux trésors permet de gagner des pièces d'or, mais surtout des objets magiques avec des effets plus ou moins intéressants. Ses effets débutent de son activation jusqu'à la fin de sa période d'activité, en cliquant sur l'icône brun qui devient alors vert.
                </div>
                <div class=\"category-header\">
                    Le Braconnage
                </div>
                <div class=\"category-body\">
                    Collectionnez jusqu'à 60 trophées de chasse différents au cours de vos voyages. Pour chasser et capturer la faune d'Ilshenar, il suffit d'envoyer vos explorateurs à terre faire du braconnage dans les différentes régions. De belles récompenses en pièces magiques vous attendent, mais prenez garde aux mauvaises rencontres... La chasse vous permet également de collecter des ressources, comme de la nourriture, du cuir et des pièces d'or.
                </div>
                <div class=\"category-header\">
                    Les Navires
                </div>
                <div class=\"category-body\">
                    La page Navires vous donne un état des lieux précis de votre flotte et de votre repaire, tout en permettant de les gérer. Chaque Navire a son propre niveau, qu'il est possible de monter à force de jouer. La barre verte symbolise l'expérience du navire, et à chaque fois qu'elle atteint son maximum, le navire monte d'un niveau. Le navire gagne de l'expérience en voyageant, en combattant et lorsque vous l'améliorez par vous-même avec du bois, du cuir, des pièces d'or et un charpentier.
                    <br><br>
                    Vous pouvez transporter dans chaque navire un certain nombre d'équipage et de marchandises en fonction de son niveau. La barre rouge indique l'état de votre bateau, une fois à zéro, le navire est coulé. Il est possible de réparer le navire à tout moment avec du bois, du cuir, des pièces d'or et un charpentier via cette page. La barre orange indique le moral de l'équipage à bord du navire, qui influe sur son efficacité au combat. Vous pouvez monter le moral de vos hommes grâce à de la nourriture, de l'alcool, des pièces d'or et un cuisinier.
                </div>
                <div class=\"category-header\">
                    L'Equipage
                </div>
                <div class=\"category-body\">
                    La page Equipage vous permet de recruter les membres d'équipages de vos navires pour quelques pièces d'or. Il y a 6 types de personnes différentes à recruter pour que tout se passe bien à bord d'un navire. Le matelot permet de déplacer le navire et participe aux abordages. Sans au moins un matelot à bord d'un navire, impossible de lui faire lever l'ancre ! L'explorateur permet de braconner et d'explorer les régions. C'est lui que l'on envoie d'habitude à terre lors des escales, mais il participera aussi aux abordages en mer.
                    <br><br>
                    Le canonnier permet d'utiliser les canons à bord du navire, à raison d'un canonnier par canon. Exemple, si vous avez 20 canons et 8 canonniers sur le bateau, seulement 8 canons seront utilisés. Grâce au cuisinier, vous pourrez nourrir et divertir l'équipage avec de la nourriture et de l'alcool pour lui remonter le moral. Le Charpentier vous permet de réparer et d'améliorer vos navires avec du bois, du cuir et des pièces d'or. Et pour finir, le chirurgien permet de soigner l'équipage lors des combats et de sauver ainsi des vies.
                </div>
                <div class=\"category-header\">
                    La Guerre
                </div>
                <div class=\"category-body\">
                    Le système de guerre permet de faire s'affronter deux flottes. Le repaire n'entre en compte que pour le défenseur. La bataille se passe en deux temps : échanges de coups de canon et abordages. Pour chacune des deux étapes il est possible de donner des ordres précis avant l'attaque. Un navire en mauvaise posture peut réussir à prendre la fuite, à moins qu'il n'ait subi un tir à démâter, brisant son mat et déchirant ses voiles. A la fin de l'affrontement, un rapport de bataille complet est disponible, indiquant les pertes, le butin de guerre, etc...
                    <br><br>
                    Il est possible d'attaquer les pêcheurs, les marchands et la marine royale chaque jour dans toutes les régions. Il est même possible de leur capturer des navires pour agrandir sa propre flotte. On ne peut recevoir que deux attaques par période de 24h dans chaque région, et d'un joueur différent. On ne peut attaquer (et recevoir une attaque) qu'un joueur ayant entre la moitié (50%) et le double (200%) de sa puissance. Une immunité de 3 jours pour les débutants permet de les laisser découvrir tranquillement le jeu.
                </div>
                <div class=\"category-header\">
                    Le Commerce
                </div>
                <div class=\"category-body\">
                    L'achat et la vente de marchandises se fait uniquement via le repaire et non par les navires directement. Pour vendre, il faut donc décharger la cargaison à terre, dans le repaire. Et pour les marchandises achetées, il faut les charger à bord du navire souhaité pour pouvoir les utiliser. Pour transférer les membres d'équipage et les marchandises entre navires et repaire, il suffit de cliquer sur le lien Transfert de marchandise, d'Equipage ou de Pièces d'or présent sur la page Navire.
                    <br><br>
                    Sur la page Commerce, il est possible de tout vendre et d'acheter aux marchands. Une taxe commerciale de 10% s'ajoute aux prix de total de la vente pour l'acheteur, qui sera distribuée chaque jour aux alliances contrôlant les régions d'Ilshenar. Le taux du marché varie chaque jour entre 50% et 100%, rendant l'achat ou la vente de marchandise plus ou moins intéressant. Une astuce consiste à acheter à un taux de 50% des bijoux, par exemple, puis à les revendre lorsque le taux est à 100% pour doubler son capital de départ. La caverne aux trésors permet de vendre et d'acheter les objets magiques obtenus grâce à la chasse aux trésors.
                </div>
                <div class=\"category-header\">
                    Les Alliances
                </div>
                <div class=\"category-body\">
                    Il est possible de rejoindre une Alliance ou de fonder la sienne à l'aide de la page Alliance. En plus de multiplier son plaisir de jeu et de se faire des amis pirates, on bénéficiera sans doute de précieux conseils et d'une aide financière.
                    <br><br>
                    Le contrôle d'une ou plusieurs régions par une alliance, permet chaque jour à ses membres de recevoir un pourcentage de la taxe commerciale : 20% pour l'Ile aux Forbans et 4% pour les autres régions conquises. A la fin de chaque journée, l'Alliance ayant accumulé le plus de points prend le contrôle de la région correspondante. Pour gagner des points dans une région, il suffit d'y combattre pour s'imposer et marquer son territoire. En contrôlant des régions, l'alliance gagnera également des points de réputation.
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "rules.html.twig", "C:\\Users\\Gianni GIUDICE\\Documents\\SymfonyWebsites\\pd3o\\templates\\rules.html.twig");
    }
}
