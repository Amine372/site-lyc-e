import os
import random
import string
import shutil
continuer = "oui"
variables =[]
fich = str(input("Nom du fichier et de la classe"))
fich2 =fich +".php"
mon_fichier = open(fich2, "w")
mon_fichier.write("<?php")
mon_fichier.write("\n")
mon_fichier.write("class ")
mon_fichier.write("Model_")
mon_fichier.write(fich)
mon_fichier.write("\n")
mon_fichier.write("{")
mon_fichier.write("\n")
while(continuer=="oui"):
    gh= str(input("Citer les variables pour la fabrication model"))
    variables.append(gh)
    continuer = str(input("Continuer oui/non"))
for i in range (0,len(variables)):
    mon_fichier.write("private $_")
    mon_fichier.write(variables[i])
    mon_fichier.write(";")
    mon_fichier.write("\n")
mon_fichier.write("// Liste des getters")
mon_fichier.write("\n")

for i in range (0,len(variables)):
    mon_fichier.write("public function ")
    mon_fichier.write(variables[i])
    mon_fichier.write("()")
    mon_fichier.write("\n")
    mon_fichier.write("{")
    mon_fichier.write("\n")
    mon_fichier.write("  return $this->_")
    mon_fichier.write(variables[i])
    mon_fichier.write(";")
    mon_fichier.write("\n")
    mon_fichier.write("}")
    mon_fichier.write("\n")
mon_fichier.write("// Partie Setter")
mon_fichier.write("\n")
for i in range (0,len(variables)):
    mon_fichier.write("public function set")
    mon_fichier.write(variables[i])
    mon_fichier.write("($")
    mon_fichier.write(variables[i])
    mon_fichier.write(")")
    mon_fichier.write("\n")
    mon_fichier.write("{")
    mon_fichier.write("\n")
    mon_fichier.write("$")
    mon_fichier.write(variables[i])
    mon_fichier.write(" = (int) $")
    mon_fichier.write(variables[i])
    mon_fichier.write(";")
    mon_fichier.write("\n")
    mon_fichier.write("\n")
    mon_fichier.write("if ($")
    mon_fichier.write(variables[i])
    mon_fichier.write(" >= 1 && $")
    mon_fichier.write(variables[i])
    mon_fichier.write(" <= 100)")
    mon_fichier.write("\n")
    mon_fichier.write("{")
    mon_fichier.write("\n")
    mon_fichier.write(" $this->_")
    mon_fichier.write(variables[i])
    mon_fichier.write(" = $")
    mon_fichier.write(variables[i])
    mon_fichier.write(";")
    mon_fichier.write("\n")
    mon_fichier.write("}")
    mon_fichier.write("\n")
    mon_fichier.write("}")
    mon_fichier.write("\n")
mon_fichier.close()