def sumSquareSquareSumDiff(max):
    sum = 0
    sumOfSquares = 0
    #Python range is exclusive, so we need to add 1 to max
    for i in range(max + 1):
        sum += i
        sumOfSquares += (i ** 2)
    print "The sum of squares for all numbers between 1 and %d is %d, while the square of the sum is %d" % (max, sumOfSquares, sum ** 2)
    print "Therefore, the difference between the sum of squares and the square of the sum is %d" % ((sum ** 2) - sumOfSquares)
    
sumSquareSquareSumDiff(100)    