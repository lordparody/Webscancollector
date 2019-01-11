<?php
// https://gist.github.com/magnetikonline/650e30e485c0f91f2f40
// nginx redirection  ++  location / { try_files $uri $uri/ /index.php$is_args$args; }  ++
// works on IIS with PHP installed
// version 0.2 - code assistance from S7oRm

class DumpHTTPRequestToFile {

        public function execute($targetFile) {
                $datetime = microtime(true);

                $mydata->time = $datetime;
                $mydata->Headers = $_SERVER;
                $mydata->Request = $_REQUEST;


                $myJSON = json_encode($mydata,JSON_UNESCAPED_SLASHES);


                file_put_contents(
                        $targetFile,
                        $myJSON . "\n", FILE_APPEND
                );

                echo("Page not found\n\n");
        }
}


(new DumpHTTPRequestToFile)->execute('./dumprequest.txt');
?>
