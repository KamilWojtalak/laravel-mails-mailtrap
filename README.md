Tworzysz nowe github repo  
  
git log --oneline  

git reset --hard <has commita o jeden przed tym, który chcesz usunąć>  
  
sudo rm -rf .git && git init && git config --local user.email "kamilwojtalak99@gmail.com"  && git config --local user.name "Kamil Wojtalak"  && git config --global core.autocrlf input  && git config core.fileMode false  && git add .  && git commit -m 'init'  

git remote add origin https://github.com/KamilWojtalak/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.git  && git push -u origin master  
