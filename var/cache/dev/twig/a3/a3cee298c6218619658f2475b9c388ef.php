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

/* backend/detail_commande/pdf.html.twig */
class __TwigTemplate_1e3be97f82fff83ebd56b3feb40c9365 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/detail_commande/pdf.html.twig"));

        // line 1
        echo "<style>
/* Housekeeping */
body{
  font-size:16px;
}
.spreadSheetGroup{
    /*font:0.75em/1.5 sans-serif;
    font-size:14px;
  */
    color:#333;
    background-color:#fff;
    padding:1em;
}

/* Tables */
.spreadSheetGroup table{
    width:100%;
    margin-bottom:1em;
    border-collapse: collapse;
}
.spreadSheetGroup .proposedWork th{
    background-color:#eee;
}
.tableBorder th{
  background-color:#eee;
}
.spreadSheetGroup th,
.spreadSheetGroup tbody td{
    padding:0.5em;

}
.spreadSheetGroup tfoot td{
    padding:0.5em;

}
.spreadSheetGroup td:focus { 
  border:1px solid #fff;
  -webkit-box-shadow:inset 0px 0px 0px 2px #5292F7;
  -moz-box-shadow:inset 0px 0px 0px 2px #5292F7;
  box-shadow:inset 0px 0px 0px 2px #5292F7;
  outline: none;
}
.spreadSheetGroup .spreadSheetTitle{ 
  font-weight: bold;
}
.spreadSheetGroup tr td{
  text-align:center;
}
/*
.spreadSheetGroup tr td:nth-child(2){
  text-align:left;
  width:100%;
}
*/

/*
.documentArea.active tr td.calculation{
  background-color:#fafafa;
  text-align:right;
  cursor: not-allowed;
}
*/
.spreadSheetGroup .calculation::before, .spreadSheetGroup .groupTotal::before{
  /*content: \"\$\";*/
}
.spreadSheetGroup .trAdd{
  background-color: #007bff !important;
  color:#fff;
  font-weight:800;
  cursor: pointer;
}
.spreadSheetGroup .tdDelete{
  background-color: #eee;
  color:#888;
  font-weight:800;
  cursor: pointer;
}
.spreadSheetGroup .tdDelete:hover{
  background-color: #df5640;
  color:#fff;
  border-color: #ce3118;
}
.documentControls{
  text-align:right;
}
.spreadSheetTitle span{
  padding-right:10px;
}

.spreadSheetTitle a{
  font-weight: normal;
  padding: 0 12px;
}
.spreadSheetTitle a:hover, .spreadSheetTitle a:focus, .spreadSheetTitle a:active{
  text-decoration:none;
}
.spreadSheetGroup .groupTotal{
  text-align:right;
}



table.style1 tr td:first-child{
  font-weight:bold;
  white-space:nowrap;
  text-align:right;
}
table.style1 tr td:last-child{
  border-bottom:1px solid #000;
}



table.proposedWork td,
table.proposedWork th,
table.exclusions td,
table.exclusions th{
  border:1px solid #000;
}
table.proposedWork thead th, table.exclusions thead th{
  font-weight:bold;
}
table.proposedWork td,
table.proposedWork th:first-child,
table.exclusions th, table.exclusions td{
  text-align:left;
  vertical-align:top;
}
table.proposedWork td.description{
  width:80%;
}

table.proposedWork td.amountColumn, table.proposedWork th.amountColumn,
table.proposedWork td:last-child, table.proposedWork th:last-child{
  text-align:center;
  vertical-align:top;
  white-space:nowrap;
}

.amount:before, .total:before{
  content: \"\$\";
}
table.proposedWork tfoot td:first-child{
  border:none;
  text-align:right;
}
table.proposedWork tfoot tr:last-child td{
  font-size:16px;
  font-weight:bold;
}

table.style1 tr td:last-child{
  width:100%;
}
table.style1 td:last-child{
  text-align:left;
}
td.tdDelete{
  width:1%;
}

table.coResponse td{text-align:left}
table.shipToFrom td, table.shipToFrom th{text-align:left}

.docEdit{border:0 !important}

.tableBorder td, .tableBorder th{
  border:1px solid #000;
}
.tableBorder th, .tableBorder td{text-align:center}

table.proposedWork td, table.proposedWork th{text-align:center}
table.proposedWork td.description{text-align:left}

</style>

<div class=\"document active\">
  <div class=\"spreadSheetGroup\">

    
    <table class=\"shipToFrom\">
      <thead style=\"font-weight:bold\">
        
      <tbody>
        <tr>
          <td contenteditable=\"true\" style=\"width:50%\">
            Commande : ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["intitule"]) || array_key_exists("intitule", $context) ? $context["intitule"] : (function () { throw new RuntimeError('Variable "intitule" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "<br/><br/><br/>
            Nom : ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 188, $this->source); })()), "utilisateur", [], "any", false, false, false, 188), "nomAssociation", [], "any", false, false, false, 188), "html", null, true);
        echo "<br/>
            Nombre des bénéficiaires : ";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 189, $this->source); })()), "beneficiaire", [], "any", false, false, false, 189), "html", null, true);
        echo "<br/>
            Nombre des familles servies: ";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 190, $this->source); })()), "familleNbr", [], "any", false, false, false, 190), "html", null, true);
        echo "
          </td>
          <td contenteditable=\"true\" style=\"width:50%\">
                      Remarque : ";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 193, $this->source); })()), "commentaire", [], "any", false, false, false, 193), "html", null, true);
        echo "<br/><br/><br/>

Commandé le : ";
        // line 195
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 195, $this->source); })()), "date", [], "any", false, false, false, 195), "d-m-Y"), "html", null, true);
        echo "  <br/>
Livraison le : ";
        // line 196
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 196, $this->source); })()), "dateSouhaite", [], "any", false, false, false, 196), "d-m-Y"), "html", null, true);
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 196, $this->source); })()), "livrable", [], "any", false, false, false, 196) == true)) {
            echo "A LIVRER";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 196, $this->source); })()), "livrable", [], "any", false, false, false, 196) == false)) {
            echo "Sur Place";
        }
        echo "<br/>
          </td>
        </tr>
      </tbody>
    </table>

    <hr style=\"visibility:hidden\"/>
    
    
    <table class=\"proposedWork\" width=\"100%\" style=\"margin-top:20px\">
      <thead>
 <th> ART</th>
  <th>QTE</th>
    <th>DESIGNATION</th>
       <th>COMMENTAIRE</th>                                         
        <th>&nbsp; &nbsp; &nbsp;</th>
        <th>&nbsp; &nbsp; &nbsp;</th>
       
         
      </thead>
      <tbody>
       ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 217, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 218
            echo "                                            <tr>
                                            <td>";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 219), "codeArticle", [], "any", false, false, false, 219), "html", null, true);
            echo "</td>
                                            <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "quantite", [], "any", false, false, false, 220), "html", null, true);
            echo "</td>
                                            <td style=\"text-align: left;\">";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "article", [], "any", false, false, false, 221), "libelleArticle", [], "any", false, false, false, 221), "html", null, true);
            echo "</td>
                                                
                                                
                                                <td  style=\"text-align: left;\">";
            // line 224
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "commentaire", [], "any", false, false, false, 224)) > 35)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "commentaire", [], "any", false, false, false, 224), 0, 35) . "...")) : (twig_get_attribute($this->env, $this->source, $context["f"], "commentaire", [], "any", false, false, false, 224))), "html", null, true);
            echo " </td>
                                                <td></td>
                                                 <td></td>
                                                
                                        
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "      </tbody>
      
    </table>

    
    
 
 

  

  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "backend/detail_commande/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 230,  311 => 224,  305 => 221,  301 => 220,  297 => 219,  294 => 218,  290 => 217,  258 => 196,  254 => 195,  249 => 193,  243 => 190,  239 => 189,  235 => 188,  231 => 187,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
/* Housekeeping */
body{
  font-size:16px;
}
.spreadSheetGroup{
    /*font:0.75em/1.5 sans-serif;
    font-size:14px;
  */
    color:#333;
    background-color:#fff;
    padding:1em;
}

/* Tables */
.spreadSheetGroup table{
    width:100%;
    margin-bottom:1em;
    border-collapse: collapse;
}
.spreadSheetGroup .proposedWork th{
    background-color:#eee;
}
.tableBorder th{
  background-color:#eee;
}
.spreadSheetGroup th,
.spreadSheetGroup tbody td{
    padding:0.5em;

}
.spreadSheetGroup tfoot td{
    padding:0.5em;

}
.spreadSheetGroup td:focus { 
  border:1px solid #fff;
  -webkit-box-shadow:inset 0px 0px 0px 2px #5292F7;
  -moz-box-shadow:inset 0px 0px 0px 2px #5292F7;
  box-shadow:inset 0px 0px 0px 2px #5292F7;
  outline: none;
}
.spreadSheetGroup .spreadSheetTitle{ 
  font-weight: bold;
}
.spreadSheetGroup tr td{
  text-align:center;
}
/*
.spreadSheetGroup tr td:nth-child(2){
  text-align:left;
  width:100%;
}
*/

/*
.documentArea.active tr td.calculation{
  background-color:#fafafa;
  text-align:right;
  cursor: not-allowed;
}
*/
.spreadSheetGroup .calculation::before, .spreadSheetGroup .groupTotal::before{
  /*content: \"\$\";*/
}
.spreadSheetGroup .trAdd{
  background-color: #007bff !important;
  color:#fff;
  font-weight:800;
  cursor: pointer;
}
.spreadSheetGroup .tdDelete{
  background-color: #eee;
  color:#888;
  font-weight:800;
  cursor: pointer;
}
.spreadSheetGroup .tdDelete:hover{
  background-color: #df5640;
  color:#fff;
  border-color: #ce3118;
}
.documentControls{
  text-align:right;
}
.spreadSheetTitle span{
  padding-right:10px;
}

.spreadSheetTitle a{
  font-weight: normal;
  padding: 0 12px;
}
.spreadSheetTitle a:hover, .spreadSheetTitle a:focus, .spreadSheetTitle a:active{
  text-decoration:none;
}
.spreadSheetGroup .groupTotal{
  text-align:right;
}



table.style1 tr td:first-child{
  font-weight:bold;
  white-space:nowrap;
  text-align:right;
}
table.style1 tr td:last-child{
  border-bottom:1px solid #000;
}



table.proposedWork td,
table.proposedWork th,
table.exclusions td,
table.exclusions th{
  border:1px solid #000;
}
table.proposedWork thead th, table.exclusions thead th{
  font-weight:bold;
}
table.proposedWork td,
table.proposedWork th:first-child,
table.exclusions th, table.exclusions td{
  text-align:left;
  vertical-align:top;
}
table.proposedWork td.description{
  width:80%;
}

table.proposedWork td.amountColumn, table.proposedWork th.amountColumn,
table.proposedWork td:last-child, table.proposedWork th:last-child{
  text-align:center;
  vertical-align:top;
  white-space:nowrap;
}

.amount:before, .total:before{
  content: \"\$\";
}
table.proposedWork tfoot td:first-child{
  border:none;
  text-align:right;
}
table.proposedWork tfoot tr:last-child td{
  font-size:16px;
  font-weight:bold;
}

table.style1 tr td:last-child{
  width:100%;
}
table.style1 td:last-child{
  text-align:left;
}
td.tdDelete{
  width:1%;
}

table.coResponse td{text-align:left}
table.shipToFrom td, table.shipToFrom th{text-align:left}

.docEdit{border:0 !important}

.tableBorder td, .tableBorder th{
  border:1px solid #000;
}
.tableBorder th, .tableBorder td{text-align:center}

table.proposedWork td, table.proposedWork th{text-align:center}
table.proposedWork td.description{text-align:left}

</style>

<div class=\"document active\">
  <div class=\"spreadSheetGroup\">

    
    <table class=\"shipToFrom\">
      <thead style=\"font-weight:bold\">
        
      <tbody>
        <tr>
          <td contenteditable=\"true\" style=\"width:50%\">
            Commande : {{intitule}}<br/><br/><br/>
            Nom : {{commande.utilisateur.nomAssociation}}<br/>
            Nombre des bénéficiaires : {{commande.beneficiaire}}<br/>
            Nombre des familles servies: {{commande.familleNbr}}
          </td>
          <td contenteditable=\"true\" style=\"width:50%\">
                      Remarque : {{commande.commentaire}}<br/><br/><br/>

Commandé le : {{commande.date|date('d-m-Y')}}  <br/>
Livraison le : {{commande.dateSouhaite|date('d-m-Y')}} {% if(commande.livrable==true) %}A LIVRER{% endif %} {% if(commande.livrable==false) %}Sur Place{% endif %}<br/>
          </td>
        </tr>
      </tbody>
    </table>

    <hr style=\"visibility:hidden\"/>
    
    
    <table class=\"proposedWork\" width=\"100%\" style=\"margin-top:20px\">
      <thead>
 <th> ART</th>
  <th>QTE</th>
    <th>DESIGNATION</th>
       <th>COMMENTAIRE</th>                                         
        <th>&nbsp; &nbsp; &nbsp;</th>
        <th>&nbsp; &nbsp; &nbsp;</th>
       
         
      </thead>
      <tbody>
       {% for f in details %}
                                            <tr>
                                            <td>{{ f.article.codeArticle }}</td>
                                            <td>{{ f.quantite}}</td>
                                            <td style=\"text-align: left;\">{{ f.article.libelleArticle  }}</td>
                                                
                                                
                                                <td  style=\"text-align: left;\">{{ f.commentaire|length > 35 ? f.commentaire|slice(0, 35) ~ '...' :  f.commentaire  }} </td>
                                                <td></td>
                                                 <td></td>
                                                
                                        
                                                {% endfor %}
      </tbody>
      
    </table>

    
    
 
 

  

  </div>
</div>", "backend/detail_commande/pdf.html.twig", "C:\\Users\\AK47\\Desktop\\BanqueAlimentaire\\templates\\backend\\detail_commande\\pdf.html.twig");
    }
}
