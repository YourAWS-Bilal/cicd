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

/* employe/gains.html.twig */
class __TwigTemplate_7d5374dd377cf26b835d49ce9e2d7b87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/gains.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/gains.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gains";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styleHome.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
      
            
      </ul>
      <form class=\"d-flex\">
        <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
            </li>
      </form>
    </div>
  </div>  
</nav>

<div class=\"app d-flex mt-5 flex-row align-items-center\">
    <div class=\"container\">


    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "flashbag", [], "any", false, false, false, 35), "get", [0 => "Success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> ";
            // line 37
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</h4></center>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " 



        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 ";
        // line 67
        if ((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 67, $this->source); })())) {
            echo " 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["wins"]) || array_key_exists("wins", $context) ? $context["wins"] : (function () { throw new RuntimeError('Variable "wins" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["win"]) {
                // line 78
                echo "            <tr>
                <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["win"], "ticket", [], "any", false, false, false, 79), "title", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                <td>";
                // line 80
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 80) == 0)) {
                    echo "<span class=\"badge bg-warning\">Gains pas encore distribué</span> ";
                } else {
                    echo "<span class=\"badge bg-info\">Gains est déja distribué</span>";
                }
                echo "</td>
                <td>";
                // line 81
                if ((twig_get_attribute($this->env, $this->source, $context["win"], "send", [], "any", false, false, false, 81) == 0)) {
                    // line 82
                    echo "                <form method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_code_send");
                    echo "\">
                <input type=\"hidden\" value=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["win"], "id", [], "any", false, false, false, 83), "html", null, true);
                    echo "\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gaint</button>
                </form>
                ";
                }
                // line 87
                echo "                
                
                </td>
    
            </tr>
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['win'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "        </tbody>
    </table>
 ";
        }
        // line 96
        echo " 


            </div>
        </div>
    </div>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "employe/gains.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 96,  243 => 94,  231 => 87,  224 => 83,  219 => 82,  217 => 81,  209 => 80,  205 => 79,  202 => 78,  198 => 77,  185 => 67,  156 => 40,  146 => 37,  143 => 36,  139 => 35,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gains{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('styleHome.css') }}\">
{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"/employe\">TeaTipTop</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
          <ul class=\"navbar-nav me-auto\">
       
      
            
      </ul>
      <form class=\"d-flex\">
        <li class=\"nav-item d-flex\">
                <a class=\"nav-link\" style=\"color:white;\" href=\"/logout\">Déconnection</a>
            </li>
      </form>
    </div>
  </div>  
</nav>

<div class=\"app d-flex mt-5 flex-row align-items-center\">
    <div class=\"container\">


    {% for message in app.session.flashbag.get('Success') %}
<div class=\"alert alert-dismissible alert-primary col-md-8\" >
  <center><h4 class=\"alert-heading\"> {{ message }}</h4></center>
</div>
<br>
{% endfor %} 



        <div class=\"justify-content-center row\">
            <div class=\"col-md-8\">
                <div class=\"card-group \">
                    <div class=\"text-white py-5 d-md-down-none card cardSubmitEmailCustomer\" style=\"background-color: rgba(0, 0, 245, 0.5)\">
                        <div class=\"text-center card-body\" id=\"listCustomerTickets\">
                            <div class=\"col-12 contentUserGain\" id=\"blockUserGain\">
                                <h2 class=\"text-white\">Indiquez l'email du client pour voir ses gains :</h2>
                                <p id=\"result\"></p>
                                <form method=\"POST\" action=\"/employe/checkuser/checkcode\">
                                <div class=\"input-group\">
                                <div class=\"col-6\">
                                <input name=\"mail\" type=\"email\" placeholder=\"Email\" class=\"form-control\">
                                </div>
                                <div class=\"col-4\">
                                <input type=\"submit\"  value=\"valider\" class=\"btn btn-success btn-block\">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


 {% if wins %} 
                <table class=\"table mt-4\" style=\"background-color: rgba(244, 217, 231, 0.8)\" >
        <thead>
            <tr>
                <th>Type de gain</th>
                <th>L'état de gain</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
        {% for win in wins %}
            <tr>
                <td>{{win.ticket.title}}</td>
                <td>{% if win.send == 0 %}<span class=\"badge bg-warning\">Gains pas encore distribué</span> {% else %}<span class=\"badge bg-info\">Gains est déja distribué</span>{% endif %}</td>
                <td>{% if win.send == 0 %}
                <form method=\"POST\" action=\"{{path('app_code_send')}}\">
                <input type=\"hidden\" value=\"{{win.id }}\" name=\"gain_id\">
                <button type=\"submit\" class=\"btn btn-success btn-l\">Donner le gaint</button>
                </form>
                {% endif %}
                
                
                </td>
    
            </tr>
            
        {% endfor %}
        </tbody>
    </table>
 {% endif %} 


            </div>
        </div>
    </div>
</div>


{% endblock %}
", "employe/gains.html.twig", "C:\\wamp64\\www\\tiptop2\\templates\\employe\\gains.html.twig");
    }
}
