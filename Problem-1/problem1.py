def getMultiples(max):
    multiples = []
    for i in range(max):
        if i % 3 == 0 or i % 5 == 0:
            multiples.append(i)
    return multiples

def sum(numbers):
    total = 0
    for i in numbers:
        total += i
    return total

print sum(getMultiples(1000))
