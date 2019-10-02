# $name = "ass";
# print "$name";

# @myArray = ("pussy", "ass", "nigga");
# @myArray = (1 .. 8);

# print ($myArray[2]); # a particular element acts as a scalar
# print ("Array has " . scalar(@myArray) . "elements"); # printing number of elements

# print reverse @myArray; # reverse printing of an array
# @myArr = reverse @myArray; # can be used as substitution too

# print (push(@myArray, "bigger")); # appends an element in the end of the array
# print (pop(@myArray)); # removes an element from the end
# print (unshift(@myArray, "bigger")); # appends an element at the start of the array
# print (shift(@myArray)); # removes an element from the start


=begin comment
# This here is an example of splice() method
# To run this, comment the previous declaration of myArray
@myArray = (1..20);
print ("Before = @myArray \n");
splice(@myArray, 5); # cuts of every element from index 5
print ("After 1 = @myArray \n");
splice(@myArray, 5, 10, 20..25); # cuts of every element from index 5 for length 10 and replaces with 20..25
print ("After 2 = @myArray \n");
=cut

=begin split() function 
$myString = "Hey This is my demo Perl Program";
@arrayGet = split(" ", $myString);
print ("Length of splitted array = " . scalar @arrayGet);
=cut

=begin join() function
@arraySet = ("bitch", "lasagna");
$myString = join("-", @arraySet);
print $myString;
=cut

# Let this as is
print "\n";