# ------------------------------------------------
# Generic Makefile
#
# Author: pkjana@iitkgp.ac.in
# Date  : 06-02-2015
#
# Changelog :
#   0.01 - first version
# ------------------------------------------------

# project name (generate executable with this name)
TARGET   = kdm

# Java compiler

JAVAC = javac

# Directory for binaries 
# - trailing slash is important! 

BIN = $(PWD)/bin

# Directory of source files 
# - trailing slash is important!
 
SOURCE_PATH = $(PWD)/src

# Supporting Library (JAR API)

CLASS_PATH = $(PWD)/lib/ext

# Java compiler flags

JAVA_FLAGS = -g -sourcepath $(SOURCE_PATH) -cp $(CLASS_PATH)/

# Creating a .class file 

COMPILE = $(JAVAC) $(JAVA_FLAGS)

RMCL = find . -name *.class -type f -delete

#--------------SECTION OF JAR FILE--------------------------

#JAR Command
JAR_CMD = jar
#JAR Flags
JAR_FLAGS = cvf
#Directory of created JAR files
JAR_PATH = $(BIN)
#Name of JAR files
JAR_NAME = $(TARGET).jar

#--------------END SECTION OF JAR FILE-----------------------


PACKAGE_PATH = $(SOURCE_PATH)/org/iitkgp/vlab/kdm

SOURCE_FILES = \
    $(PACKAGE_PATH)/engineeringDrawingBoard/EngineeringDrawingBoard.java\
    $(PACKAGE_PATH)/paSphericalFourBarMechanisms/PASphericalFourBarMechanisms.java\
    $(PACKAGE_PATH)/simulationUniversalJoint/SimulationUniversalJoint.java
		
CLASS_FILES = $(SOURCE_FILES:.java=.class)
 
all: $(CLASS_FILES) 
	$(JAR_CMD) $(JAR_FLAGS) $(JAR_PATH)/$(JAR_NAME) $(CLASS_FILES)
%.class : %.java 
	$(COMPILE) $<
	@echo "Compiled "$<" successfully!"

#
# RM is a predefined macro in make (RM = rm -f)
#
#.PHONY : clean
clean: 
	$(RMCL)
	@echo "Cleanup complete!"

#.PHONEY: remove
#remove: clean
#	@$(RM) $(BIN)/$(JAR_NAME)
#	@echo "Executable removed!"
