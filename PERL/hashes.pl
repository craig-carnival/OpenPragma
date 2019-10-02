%myHash = ('John' => 45, 'Lisa' => 40, 'Mark' => 35, 'Josh' => 30);
# %myHash = ('John', 45, 'Lisa', 40, 'Mark', 35, 'Josh', 30);
# %myHash = (-John, 45, -Lisa, 40, -Mark, 35);

# print ($myHash{'John'}); # for declaration 1 & 2
# print ($myHash{-John}); # for declaration 3

=begin Traversing the hash
while (($key => $value) = each %myHash) {
    print "$key has the value $value \n";
}
=cut

=begin extracting slices
@array = @myHash{'Lisa', 'Mark'};
print ("@array ");
=cut

# @keys = keys %myHash; # getting keys as an array
# print "@keys ";

=begin Checking for existence
if (exists($myHash{'Lisa'})) {
    print "Fuck Lisa \n";
} else {
    print "where tf did Lisa go? \n";
}
=cut

=begin getting size
$size = keys %myHash;
print "Hash size = $size";
=cut

=begin Adding a new element
$myHash{"starboy"} = 100;
@keys = keys %myHash;
@values = values %myHash;
print "@keys \n";
print "@values \n";
=cut

# Let this as is
print "\n";