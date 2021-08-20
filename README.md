
curl -X GET http://localhost:8000/api/utils/number-category/6
HTTP/1.0 200 OK
Cache-Control: no-cache, private
Content-Type:  application/json
Date:          Fri, 20 Aug 2021 07:41:10 GMT

{"6 is":"Perfect","The aliquot sum is":"6"}

curl -X GET http://localhost:8000/api/utils/number-category/8
HTTP/1.0 200 OK
Cache-Control: no-cache, private
Content-Type:  application/json
Date:          Fri, 20 Aug 2021 07:42:58 GMT

{"8 is":"Deficient","The aliquot sum is":"7"}

curl -X GET http://localhost:8000/api/utils/number-category/12
HTTP/1.0 200 OK
Cache-Control: no-cache, private
Content-Type:  application/json
Date:          Fri, 20 Aug 2021 07:43:28 GMT

{"12 is":"Abundant","The aliquot sum is":"16"}


php phpunit "C:\Users\andre\PhpstormProjects\perfect-number-lumen\tests\MainControllerTest.php"
PHPUnit 9.5.8 by Sebastian Bergmann and contributors.

....                                                                4 / 4 (100%)

Time: 00:00.076, Memory: 10.00 MB

OK (4 tests, 4 assertions)
# -a100adrian-PerfectNumberChallenge
# PerfectNumberChallenge
