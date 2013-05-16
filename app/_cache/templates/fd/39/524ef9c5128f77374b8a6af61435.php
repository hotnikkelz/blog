<?php

/* partials/footer.html */
class __TwigTemplate_fd39524ef9c5128f77374b8a6af61435 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <footer>
            <div class=\"wrapper\">
                <p>&copy; Copyright Akini James 2013 CMS by <a href=\"http://www.staceyapp.com\">stacey</a>
            </div>
                
        </footer>

        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.9.1.min.js\"><\\/script>')</script>
        <script src=\"js/plugins.js\"></script>
        <script src=\"js/main.js\"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html";
    }

    public function isTraitable()
    {
        return true;
    }
}
