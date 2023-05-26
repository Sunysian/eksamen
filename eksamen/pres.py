import numpy as np
import matplotlib.pyplot as plt
import statsmodels.api as sm
lowess = sm.nonparametric.lowess
import pylab as pl

snusl = np.loadtxt("snusl.csv", delimiter = ";", skiprows = 1, usecols = (0,1))
snuss = np.loadtxt("snuss.csv", delimiter = ";", skiprows = 1, usecols = (0,1))
aarl = snusl[:,0]
templ = snusl[:,1]
aars = snuss[:,0]
temps = snuss[:,1]
nl = len(aarl)
ns = len(aars)
derivertl = pl.zeros(nl)
deriverts = pl.zeros(ns)

snittl = sum("gjennomsnit av % av unge som bruker snus ", templ) / nl
snitts = sum("gjennomsnit av % av eldre som bruker snus ", temps) / ns
print(snittl)
print(snitts)

for i in range(0, nl-1):
    derivertl[i] = (templ[i+1] - templ[i]) / (aarl[i+1] - aarl[i])
    
for i in range(0, ns-1):
    deriverts[i] = (temps[i+1] - temps[i]) / (aars[i+1] - aars[i])

#z = lowess(temp, aar, frac = 0.2, return_sorted = False)

#for i in range (k, len(temp) - k):
#    temp_glatt.append(pl.mean(temp[(i - k):(i + k)]))



plt.plot(aarl, templ, "b")
plt.xlabel("År")
plt.ylabel("brukere i %")

plt.plot(aars, temps, "r")
plt.xlabel("År")
plt.ylabel("brukere i %")



plt.plot(aarl[0:nl-1], derivertl[0:nl-1])
plt.plot(aars[0:ns-1], deriverts[0:ns-1])
#plt.plot(aar[k:len(temp) - k], temp_glatt, "k")
#plt.xlabel("År")
#plt.ylabel("Temp i C grader")
plt.show()