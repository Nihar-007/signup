read -p "Enter your name : " name
if [[ $name == "Nihar" || $name == "nihar" ]];then
	echo "$name Taru to marathi kapi gyo"

elif [[ $name == "Vedant" || $name == "vedant" ]];then
        echo "$name Taru to mullo kapi gyo"

elif [[ $name == "Varoon" || $name == "varoon" ]];then
        echo "$name Taru to kapayeluj che"

elif [[ $name == "Mantram" || $name == "mantram" ]];then
        echo "$name Taru tara gaam noj kapi gyo"

elif [[ $name == "Tirth" || $name == "tirth" ]];then
        echo "$name Taru to marvadi kapi gyo"

else
	echo "Invalid Input"

fi

echo $bb

#use "export variable_name" in terminal to use any variable in bash file created in git bash || terminal.
#for eg: bb="Good ji Good" written in terminal but printed in bash file using "export $bb"
