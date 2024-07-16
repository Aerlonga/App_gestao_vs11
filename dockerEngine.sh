sudo apt update -y && sudo apt upgrade -y

sudo apt install -y apt-transport-https ca-certificates curl software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
echo "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

sudo apt update -y && sudo apt upgrade -y
sudo apt install -y docker-ce docker-ce-cli containerd.io




#sudo apt update -y && sudo apt upgrade -y
#sudo apt remove docker docker-engine docker.io containerd runc -y
#sudo apt install apt-transport-https ca-certificates curl gnupg lsb-release -y
#
#curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg
#echo \
#  "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
#  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
#
#sudo apt update -y
#
#sudo apt install docker-ce docker-ce-cli containerd.io docker-compose-plugin -y
#
#sudo usermod -aG docker $USER
#sudo service docker start
#sudo service docker stop
#
## Docker Compose
#sudo apt install docker-compose -y
