#!/bin/sh

echo "staging cron job start"

#sudo pkill Xvfb
#sudo pkill xvfb-run
#sudo pkill java
#sudo pkill chrome

sleep 2s

xvfb-run java -Dwebdriver.chrome.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &

sleep 10s

echo "xvfb is up"
#cd ~
#cd automationtests
#git pull
#cd test2
echo "codecept test start"
cd /home/bliu/automationtests/stagingAutobots/UAT
/home/bliu/codecept/vendor/bin/codecept run --steps --html
#/home/bliu/codecept/vendor/bin/codecept run tests/acceptance/DonateTestCest.php:donatetest --steps --html

echo "codecept test finished"
#cd ~
#cd automationtests
#cd backstopjs
cd /home/bliu/automationtests/stagingAutobots/visRegTest
sudo /usr/bin/backstop test
echo "backstop test finished"

cd /home/bliu

#zip -r backstop_report.zip automationtests/backstopjs/backstop_data/html_report/

#mutt -s "Report!" -a /home/bliu/automationtests/test2/tests/_output/report.html -- rnagaraja@911memorial.org < /home/bliu/automationtests/scraps/runGiftTestCest.sh

#mutt -s "Report!Report!" -a /home/bliu/automationtests/test2/tests/_output/report.html -- bliu@911memorial.org < /home/bliu/automationtests/scraps/runGiftTestCest.sh

#mutt -s "Report!" -a /home/bliu/automationtests/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- rnagaraja@911memorial.org
#mutt -s "Subject" -a /home/bliu/automationtests/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- bliu@911memorial.org

sudo cp /home/bliu/automationtests/stagingAutobots/UAT/tests/_output/report.html /var/www/html/

sudo cp /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/ci_report/xunit.xml /var/www/html/


echo "\n mail sent cron run complete"

date

#sudo pkill Xvfb

#sudo pkill java

sudo cp -R /home/bliu/automationtests/stagingAutobots/UAT/tests/_output /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/html_report

TIMESTAMP=$(date +%Y%m%d_%H%M%S)

sudo mv /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/html_report /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/Staging_"$TIMESTAMP"


sudo cp -R /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/stage_bitmaps_test/* /var/www/html/report/backstop_data/stage_bitmaps_test/

#sudo  -f /home/bliu/automationtests/prodautobots/visRegTest/backstop_data/bitmaps_reference/* /var/www/html/report/backstop_data/bitmaps_reference/
sudo cp -R /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/stage_bitmaps_reference /var/www/html/report/backstop_data



sudo cp -R /home/bliu/automationtests/stagingAutobots/visRegTest/backstop_data/Staging_"$TIMESTAMP" /var/www/html/report/backstop_data

echo "staging test run completed check website for updates"
