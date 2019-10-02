=begin remove after testing
open(DATA, ">fileread.txt") or die("fucking");
# $str = "\nasas";
# print DATA $str;

@myArray = ("Jai", "Mata", "Di");
foreach(@myArray) {
    print ("$_ \n");
    print (tell DATA);
    print DATA $_;
}

# @foods = qw(pizza steak chicken);
# print sort(@foods);

close(DATA);
=cut

$str = "\Upussy";
print $str;