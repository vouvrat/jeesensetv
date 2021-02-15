PROGRESS_FILE=/tmp/jeedom/jeesensetv/dependance
PROGRESS_FILE=$1
touch ${PROGRESS_FILE}
echo 0 > $PROGRESS_FILE
sudo apt -y install python3
echo 100 > ${PROGRESS_FILE}
echo "Everything is succesfully installed!"
rm $PROGRESS_FILE