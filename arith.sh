read -p "Enter the Arithmetic operator you want to perform : " opr
read -p "Enter the First number : " a
read -p "Enter the Second number : " b
c=$((a + b))
case $opr in
'+')
	echo "Addtion : $c";;
'-')
	echo "Subtraction : $((a-b))";;
'*')
	echo "Multiplication : $((a*b))";;
'/')
	echo "Division : $((a/b))";;
*)
	echo "Invalid Input"
esac
