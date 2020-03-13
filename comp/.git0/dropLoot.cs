using UnityEngine;
using System.Collections;

public class pickUp {

    public gameObject[] dropItems;
    int randomItem;
    public int[] DropRate;
    int randomChance;
    float minMoney;
    float maxMoney;
    float RandomAmmount;

    void OndeadDrop() //als enemy dood is dan doe dit
    {
        for(int i =0; i<=dropItems.length-1; i++)
        {
            randomItem = Random.Range(0.0f,100.0f);
            if(DropRate[i] <= randomItem)
            {
                Drop(dropItems[i]);
            }
        }
        RandomAmmount = Random.Range(minMoney,maxMoney);
        Xpscript.addMoney(RandomAmmount);
        randomChance = Random.Range(0.0f,100.0f);
    }

    void Drop(gameObject Item)//drop item function
    {
        instatiate(dropItems,this.transform.position);
    }
}
