sudo pkill Xvfb
sudo pkill xvfb-run
sudo pkill java
sudo pkill chromedriver
xvfb-run java -Dwebdriver.chrome.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &
