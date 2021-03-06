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

/* home.twig */
class __TwigTemplate_88bc1e6dbb0689db849535a3fdb855c988a8c8be56438c8d227de5246245a4a8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titlehome' => [$this, 'block_titlehome'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
         <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('titlehome', $context, $blocks);
        echo "</title> 
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "  
        ";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
    }

    // line 5
    public function block_titlehome($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Youpii";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  82 => 9,  76 => 6,  69 => 5,  64 => 12,  62 => 11,  59 => 10,  57 => 9,  53 => 7,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.twig", "C:\\xampp\\htdocs\\public\\templates\\home.twig");
    }
}
