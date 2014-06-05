def evenFibonacciSum(max):
    sum = 0
    lastFib = 1
    i = 1
    while i < max:
        if (i % 2 == 0):
            sum += i
        temp = lastFib
        lastFib = i
        i += temp
    print "The sum of all even fibonacci numbers less than %d is %d" % (max, sum)

evenFibonacciSum(4000000)