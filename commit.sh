CURRENT_BOOK=ansible4devops

git status -s
git checkout master
git merge $CURRENT_BOOK --squash
git status -s
git reset HEAD $CURRENT_BOOK/message.txt
git status -s
git commit -F $CURRENT_BOOK/message.txt
git push
rm $CURRENT_BOOK/message.txt
git checkout $CURRENT_BOOK