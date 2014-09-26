<?php

/* CodebenderArduinoEditorBundle:Default:index.html.twig */
class __TwigTemplate_b173a750f75629c446fbee2ee1270f0c4f03da15aad0931a6e39037849a5b05f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"author\" content=\"Christos Nianiakas\">

        <title>Arduino - Code Editor</title>

        <!-- CSS -->
        ";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b4dbde5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4dbde5_0") : $this->env->getExtension('assets')->getAssetUrl("css/b4dbde5_bootstrap.min_1.css");
            // line 17
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "b4dbde5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4dbde5_1") : $this->env->getExtension('assets')->getAssetUrl("css/b4dbde5_bootstrap-theme.min_2.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
            // asset "b4dbde5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4dbde5_2") : $this->env->getExtension('assets')->getAssetUrl("css/b4dbde5_main_3.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        } else {
            // asset "b4dbde5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b4dbde5") : $this->env->getExtension('assets')->getAssetUrl("css/b4dbde5.css");
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <!-- Main container DIV -->
        <div id=\"main-container\" class=\"container\">

            <!-- Editor's title -->
            <div id=\"title\">
                <p>Arduino - Code Editor</p>
            </div>

            <!-- Editor's toolbar -->
            <div id=\"toolbar\">
                <button id=\"cb_cf_verify_btn\" class=\"btn btn-success pull-left\">Verify</button>
                <p id=\"autosave\" style=\"display: none;\">saving ...</p>
                <span class=\"pull-right\">Select board: <select id=\"cb_cf_boards\"></select></span>
            </div>

            <!-- Editor's area -->
            <div id=\"editor-container\">
                <textarea id=\"editor-contents\" data-action=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("update");
        echo "\" style=\"display: none;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "code"), "method"), "html", null, true);
        echo "</textarea>
                <div id=\"editor\"></div>
            </div>

            <!-- Editor's statusbar -->
            <div id=\"statusbar\">
                <p id=\"cb_cf_operation_output\"></p>
                <p id=\"status\">Please, write your code, select your board and press the <span style=\"color: green;\">Verify</span> button.</p>
            </div>
        </div>

        <!-- Javascript -->
        ";
        // line 52
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "20d858b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_0") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_jquery-1.11.1.min_1.js");
            // line 59
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_1") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_2") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_compilerflasher.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_3") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_part_4_ace_1.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_4") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_part_4_mode-c_cpp_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_5") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_part_4_theme-github_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
            // asset "20d858b_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b_6") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b_main_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
        } else {
            // asset "20d858b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_20d858b") : $this->env->getExtension('assets')->getAssetUrl("js/20d858b.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 61
        echo "    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CodebenderArduinoEditorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 40,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 52,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 19,  49 => 19,  24 => 4,  32 => 12,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 59,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 17,  33 => 4,  30 => 7,);
    }
}
