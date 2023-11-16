class Hewan:
    def bersuara(self):
        pass

class Kucing(Hewan):
    def bersuara(self):
        return "Meong!"

class Anjing(Hewan):
    def bersuara(self):
        return "Guk guk!"

def suara_hewan(hewan):
    return hewan.bersuara()

kucing = Kucing()
anjing = Anjing()

print(suara_hewan(kucing))  
print(suara_hewan(anjing))  
