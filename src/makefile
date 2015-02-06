#
#---------------------IIT KGP SECTION----------------------------------------------
#
# Author: pkjana@iitkgp.ac.in
# Date  : 06-02-2015
#
#http://www.gnu.org/software/make/manual/make.html#Recursion
#Calling recursive makefile
subsystem:
	cd jsrc && $(MAKE)


#------------------------IIITH SECTION---------------------------------------------
build-dir=../build
lib-dir=lib
build-js-dir=${build-dir}/js

theme=blue-icon


all:  help-dir 

help-dir:

	(touch ${build-dir}/theme-${theme}; rsync -avC --exclude ${mathjax}.zip lab/* lib/* help themes/${theme}/* ${build-dir})





# don't remove the js directory, since copying it again with mathjax takes too long.
# http://superuser.com/questions/168130/unix-delete-files-and-folders-excluding-pattern
clean:
	(find ${build-dir} -mindepth 1 -maxdepth 1 ! -name js -print0 | xargs -0n1 rm -rf)









