read -p "Enter the numbers you want to add : " no
p=0
while (($no>0))
do
	q=$(($no%10)) 
	p=$(($p+$q))
	no=$(($no/10))
done
echo $p
