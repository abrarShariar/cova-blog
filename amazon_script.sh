ssh -i "cova-abrar-ec2.pem" ec2-user@ec2-52-87-155-195.compute-1.amazonaws.com

# for renewing ssl certificate
./certbot-auto --domain blog.covalent.ai
