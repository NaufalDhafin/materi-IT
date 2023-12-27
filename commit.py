import os

nama = str(input("Commit: "))

print()
os.system("git add .")
os.system(f"git commit -m '{nama}'")
os.system("git push")
print()

print(f"Upload {nama} 'SELESAI!'")