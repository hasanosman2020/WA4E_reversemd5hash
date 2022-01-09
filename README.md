# WA4E_reversemd5hash
This is assignment 7 of the Web Application For Everybody course taught by Charles Severance. The task is to build code to reverse an MD5 hash using a brute force technique where we 'forward hash' all possible combinations of characters in strings. The application will take an MD5 value like '81dc9bdb52d04dc20036dbd8313ed055' and check all combinations of four-digit PIN numbers to see if any of those PINs produce the given hash. As shown below, the hash does yield a four-digit number (1234). Where the application does not yield a four-digit number, the result of PIN will be 'Not found'. The application prints out the first 15 attempts to reverse-hash the PIN being tested. The application also prints out the elapsed time for the computation of hash values. I have used the following list of hash_pins, provided by the tutor, to determine what the four-digit PIN is for each one of them and to determine which hash-pin does not yield a four-digit number. This information can also be seen in the URLs of the screenshots attached.
email                pin          hash_pin
-----                ---          --------
csev@umich.edu        ****4429****        0bd65e799153554726820ca639514029
nabgilby@umich.edu    ****4413****          aa36c88c27650af3b9868b723ae15dfc
pconway@umich.edu     ****Not found****     1ca906c1ad59db8f11643829560bab55
font@umich.edu        ****4427****          1d8d70dddf147d2d92a634817f01b239
collemc@umich.edu     ****3341****          acf06cdd9c744f969958e1f085554c8b
<img width="1682" alt="reversepin1234" src="https://user-images.githubusercontent.com/7830170/148670890-86451c7d-13bf-4364-8cae-71071d5e3d02.png">
<img width="1434" alt="hashpin1234" src="https://user-images.githubusercontent.com/7830170/148670905-31cecbb7-a935-44e9-9bd6-2f7fb3788ba9.png">
<img width="1682" alt="md5_cracked" src="https://user-images.githubusercontent.com/7830170/148670910-d6495498-2a14-4181-a45d-0c74e48adc39.png">
<img width="1682" alt="md5_uncracked" src="https://user-images.githubusercontent.com/7830170/148670914-6dae8f4c-9b71-4fda-b37c-19e39d704029.png">
