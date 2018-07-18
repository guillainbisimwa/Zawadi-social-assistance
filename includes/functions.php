<?php

    /**
     * functions.php
     *
     * Guillain BISIMWA
     * March 2018, goma, RDC
     *
     * Helper functions.
     */

    require_once("constants.php");

    /**
     * Facilitates debugging by dumping contents of variable
     * to browser.
     */
    function apologize($message)
    {
        render("apology.php", ["message" => $message]);
        exit;
    }

    function dump($variable)
    {
        require("../templates/dump.php");
        exit;
    }


    /**
     * Executes SQL statement, possibly with parameters, returning
     * an array of all rows in result set or false on (non-fatal) error.
     */
    function query(/* $sql [, ... ] */)
    {
        // SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);

        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }

    /**
     * Redirects user to destination, which can be
     * a URL or a relative path on the local host.
     *
     * Because this function outputs an HTTP header, it
     * must be called before caller outputs any HTML.
     */
    function redirect($destination)
    {
        // handle URL
        if (preg_match("/^https?:\/\//localhost/OrangeProject", $destination))
        {
            header("Location: " . $destination);
        }

        // handle absolute path
        else if (preg_match("/^\/localhost/OrangeProject", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST/localhost/OrangeProject"];
            header("Location: $protocol://$host$destination");
        }

        // handle relative path
        else
        {
            // adapted from http://www.php.net/header
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\/localhost/caj");
            header("Location: $protocol://$host$path/$destination");
        }

        // exit immediately since we're redirecting anyway
        exit;
    }

    /**
     * Renders template, passing in values.
     */
    function render($template, $values = [], $titleid = [])
    {
        // if template exists, render it
        if (file_exists("../templates/$template"))
        {
            // extract variables into local scope
            extract($values);
            extract($titleid);


            // render header
            require("../templates/header.php");

            // render template
            require("../templates/$template");

            // render footer
            require("../templates/footer.php");
        }

        // else err
        else
        {
            trigger_error("Invalid template: $template", E_USER_ERROR);
        }
    }

    function sendSms($number, $message)
    {
      $url = "http://localhost:8130/inbox";
      $sercet = "";
      $request = array('secret' => $sercet ,
                       'message' => $message,
                       'recipents' => array(array('type' => 'mobile','value' => $number))
                  );
      $req = json_encode($request);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      $result = curl_exec($ch);
      curl_close($ch);

      return explode(",", $result);
    }


    /**
    * render css #id
    *
    *   function rendecss($title, $val = [])
    *   {
    *       if (file_exists("../templates/$template"))
    *       {
    *        // extract variables into local scope
    *        extract($val);
    *       }
    *
    *   }
*/
?>
