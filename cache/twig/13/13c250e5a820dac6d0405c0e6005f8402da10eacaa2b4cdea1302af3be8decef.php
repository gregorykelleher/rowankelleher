<?php

/* partials/header.html.twig */
class __TwigTemplate_6f5faca94a6a9d2a7272f8aa72da9798437223ed27d2dc5007218272ed53d5a5 extends Twig_Template
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
        echo "<div class=\"header section\">
  <div class=\"header-inner section-inner\">
    <a href=\"";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array())) {
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "url", array());
        } else {
            echo ($context["base_url_absolute"] ?? null);
        }
        echo "\" title=\"";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "\" rel=\"home\" class=\"logo\">
      <img src=\"https://www.gravatar.com/avatar/";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "gravatar", array()));
        echo "?s=90\" alt=\"Gravatar\"/>
    </a>

    ";
        // line 7
        if ($this->getAttribute(($context["site"] ?? null), "title", array())) {
            // line 8
            echo "    <h1 class=\"blog-title\">
      <a href='";
            // line 9
            echo ($context["base_url_absolute"] ?? null);
            echo "'>";
            echo $this->getAttribute(($context["site"] ?? null), "title", array());
            echo "</a>
    </h1>
    ";
        }
        // line 12
        echo "
    <div class=\"nav-toggle\">
      <div class=\"bar\"></div>
      <div class=\"bar\"></div>
      <div class=\"bar\"></div>
      <div class=\"clear\"></div>
    </div>
    <div class=\"clear\"></div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  44 => 9,  41 => 8,  39 => 7,  33 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header section\">
  <div class=\"header-inner section-inner\">
    <a href=\"{% if site.author.url %}{{ site.author.url }}{% else %}{{ base_url_absolute }}{% endif %}\" title=\"{{ site.title }}\" rel=\"home\" class=\"logo\">
      <img src=\"https://www.gravatar.com/avatar/{{ site.author.gravatar|md5 }}?s=90\" alt=\"Gravatar\"/>
    </a>

    {% if site.title  %}
    <h1 class=\"blog-title\">
      <a href='{{ base_url_absolute }}'>{{ site.title }}</a>
    </h1>
    {% endif %}

    <div class=\"nav-toggle\">
      <div class=\"bar\"></div>
      <div class=\"bar\"></div>
      <div class=\"bar\"></div>
      <div class=\"clear\"></div>
    </div>
    <div class=\"clear\"></div>
  </div>

</div>
", "partials/header.html.twig", "/Users/admin/Documents/sites/rowankelleher.me/user/themes/lingonberry/templates/partials/header.html.twig");
    }
}
