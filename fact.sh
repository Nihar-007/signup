read -p "Enter any number to know its factorial : " a
b=1
for ((i=1; i<=a; i++))
do
	b=$((b * i))
done
echo $b
