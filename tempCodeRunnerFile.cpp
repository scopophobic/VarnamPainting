#include <bits/stdc++.h>
using namespace std;

int max1(int arr[],int n){
    int max=0;
    for(int i=0;i<n;i++){
        if(arr[i]>=max){
            max=arr[i];
        }
    }
    return max;
}


int main(){
    int n;
    cin>>n;
    int arr[n];

    for(int i=0;i<n;i++){
        cin>>arr[i];
    }

    cout<<"highest num: "<<max1(arr,n)<<endl;;
    

    return 0;
}