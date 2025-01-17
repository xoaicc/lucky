// @ts-nocheck

import { AppState } from "@/admin/store/state";
import axios from "axios";

export interface BankDataResponse {
    id: number;
    name: string;
    code: string;
    bin: string;
    shortName: string;
    logo: string;
    transferSupported: boolean;
    lookupSupported: boolean;
}

export interface BankResponse {
    code: string;
    desc: string;
    data: BankDataResponse[];
}

export interface CardResponse {
    ok: boolean;
    link: string;
}

export type BankData = Omit<
    BankDataResponse,
    "transferSupported" | "lookupSupported" | "code"
>;

export async function getBankBins(): Promise<BankData[]> {
    const response = await axios.get<BankResponse>(
        "https://api.vietqr.io/v2/banks"
    );

    if (response.status == 200) {
        const data = response.data.data;
        return data.map<BankData>((item) => ({
            bin: item.bin,
            name: item.name,
            id: item.id,
            logo: item.logo,
            shortName: item.shortName,
        }));
    } else {
        return [];
    }
}

export async function createCard(data: AppState): Promise<CardResponse> {
    const url = window.WPLKPath.api + "/lucky/v1/create";

    try {
        const response = await axios.post<CardResponse>(url, data);        
        if (response.status == 200) {        
            return {
                ok: response.data.ok,
                link: window.WPLKPath.page + "?card=" + response.data.link,
            }
        } else {
            throw new Error("");
        }
    } catch (error) {
        // @ts-ignore
        return {
            ok: false,
            link: "",
        };
    }

}